<?php

namespace App\Http\Controllers;

use App\contact;
use App\Covers;
use Illuminate\Http\Request;

use App\Proposal;
use App\proposal_cache;
use App\Template;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

use Dompdf\Dompdf;
use Dompdf\Options;

class ProposalController extends Controller
{
    //

    public function proposals()
    {

        $proposal = new Proposal;

        $proposals = $proposal->where([
            'user_id' => Auth::user()->id,

        ])->get();


        return view('proposal.proposals')->with([
            'proposals'=> $proposals
        ]);
    }

    public function detail(Request $request){

        $proposal_cache = proposal_cache::where([
            "proposal_id" => $request->id,
        ])->with('contact')->with('proposal')->with('proposal.brand')->with('proposal.brand.brand_settings')->first();





        return view('proposal.detail')->with([
            "proposal_cache" => $proposal_cache
        ]);
    }

    public function delete(Request $request){
        $proposalid = $request->id;

        $proposal = new Proposal;
        $proposal = $proposal->where([
            ["id" , $proposalid],
            ['user_id' , Auth::user()->id]
        ])->first();


        if($proposal){
            $proposal->delete();
        }



        $cache = new proposal_cache;
        $cache = $cache->where([
            ["id" , $proposalid],
            ['user_id' , Auth::user()->id]
        ])->first();


        if($cache){
            $cache->delete();
        }


        // dd($template);
        return redirect()->back();


    }

    public function cachedelete(Request $request){
        $cacheid = $request->id;





        $cache = new proposal_cache;
        $cache = $cache->where([
            ["id" , $cacheid],
            ['user_id' , Auth::user()->id]
        ])->first();


        if($cache){
            $cache->delete();
        }


        // dd($template);
        return redirect()->back();


    }

    public function add(Request $request)
    {


        // $proposal = new Proposal;

        // $proposal->create([
        //     'user_id' => Auth::user()->id,
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'template_id' => $request->templateid,

        // ]);



        return view('proposal.add.select');

        // dd($request->all());

        return redirect()->back();
    }


    public function setproposal(Request $request)
    {

        // dd($request->all());


        if($request->template_id == -1){
            $template_id = self::createtemplate($request->brand_id);




        }
        else{
            // $template_id = 1;
            // dd('Underconstruction');
            $template_id = self::duplicatetemplate($request->template_id , $request->brand_id);
        }

        if($request->cover_id == -1){
            // $cover_id = $request->cover_id;

            $original = Covers::where('id', $request->coverid)->first();

            $cover = Covers::create([
                "name" => $request->proposal_name,

                "user_id" => Auth::user()->id,
                "brand_id" => $request->brand_id
            ]);


            $cover_id = $cover->id;


        }
        else{
            // $cover_id = $request->cover_id;
            $cover_id = CoverController::duplicate($request->cover_id , $request->brand_id);
        }


        // if($request->contact_id){
        //    $contact_id =
        // }



        $proposal= Proposal::create([
            'user_id' => Auth::user()->id,
            'name'=> $request->proposal_name,
            'template_id' => $template_id,
            'action' => 'new',
            'brand_id' => $request->brand_id,
            'cover_id' => $cover_id,
            'contact_id' => $request->contact_id

        ]);

        // dd($template_id);

        return redirect(URL::to(url('/')."/cover/edit/".$cover_id."?proposal_id=$proposal->id"));


        // return redirect(URL::to(url('/')."/template/".$template_id."?proposal_id=$proposal->id"));




        // return view('proposal.add.select');


    }

    public static function collect(Request $request){
        $proposal_id = $request->id;


        $proposal = Proposal::where([
            "id" => $proposal_id,
            "user_id" => Auth::user()->id,
        ])->with('brand')->with('brand.brand_settings')->with('template')->first();

        // dd($proposal);

        return view('proposal.add.collect')->with([
            "proposal" => $proposal
        ]);


    }



    public static function cache(Request $request){
        // dd($request->all());

        $check = contact::where([
            'email' => $request->email,
            'user_id' => Auth::user()->id,
        ])->first();

        if(!$check ){
            $contact = contact::create([
                "firstname" => $request->firstname,
                "lastname" => $request->lastname,
                "email" => $request->email,
                "user_id" => Auth::user()->id
            ]);
        }else{

            $contact = $check;
        }

        $contact_id = $contact->id;

        $proposal_cache = proposal_cache::create([
            "proposal_id" => $request->id,
            "contact_id" => $contact_id,
            "email_title" => $request->email_title,
            "email_template" => $request->email_template,
            "user_id" => Auth::user()->id
        ]);


        // dd($contact_id);
        $cacheid = $proposal_cache->id;




        self::sendemail($cacheid);
        // dd($cacheid);

        return redirect(URL::to(url('/')."/proposals"));




    }

    public static function sendemail($cacheid){

        $proposal_cache = proposal_cache::where([
            "id" => $cacheid,
        ])->with('contact')->with('proposal')->with('proposal.brand')->with('proposal.brand.brand_settings')->first();


        $contact = $proposal_cache->contact  ;
        $proposal = $proposal_cache->proposal;
        $brand = $proposal->brand;
        $brand_settings = $brand->brand_settings;


        $proposal_cache->status = 1 ;

        $proposal_cache->save();

        // dd($proposal_cache);


        $to_name = $contact->firstname;
        $to_email = $contact->email;




        $data =  ["data" => $proposal_cache->email_template];
        Mail::send('proposal.emailpreview', $data, function($message) use ($to_name, $to_email,$proposal_cache ,$brand , $brand_settings) {
            $message->to($to_email, $to_name)->subject($proposal_cache->email_title);
            $message->from($brand_settings->brand_email, $brand->name);
        });




    }

    public static function accept(Request $request){
        // dd($request->all());

        $proposal_cache = proposal_cache::where("proposal_id" , $request->id)->first();

        $proposal_cache->signature = $request->signature;
        $proposal_cache->status = 4;
        $proposal_cache->save();

        return response()->json([
            "status" => 200
        ]);


    }

    public static function decline(Request $request){
        // dd($request->all());

        $proposal_cache = proposal_cache::where("proposal_id" , $request->id)->first();


        $proposal_cache->status = -1;
        $proposal_cache->save();

        return response()->json([
            "status" => 200
        ]);


    }

    public static function thanks(Request $request){
        $proposal = Proposal::where([
            "id" => $request->id,

        ])->with('brand')->with('brand.brand_settings')->with('template')->first();
        // dd($proposal);
        return view('proposal.thanks')->with('proposal', $proposal);
    }

    public static function preview(Request $request){
        $jsonString = file_get_contents(base_path('storage/app/template/'.$request->code.'.json'));

        $data = json_decode($jsonString);


        // dd($data);



        // Update Key
        // dd($data['name']);


        return view("template.preview")->with([
            "data" => $data,
        ]);


    }

    public static function topdf(Request $request){


        $proposalid = $request->id;

        $proposal_cache = proposal_cache::where([
            "proposal_id" => $proposalid,
        ])->with('contact')
        ->with('proposal')
        ->with('proposal.template')
        ->with('proposal.brand')
        ->with('proposal.brand.brand_settings')
        ->first();

        // dd($proposal_cache);

        $contact = $proposal_cache->contact  ;
        $proposal = $proposal_cache->proposal;
        $brand = $proposal->brand;
        $brand_settings = $brand->brand_settings;
        $template = $proposal->template;




        $jsonString = file_get_contents(base_path('storage/app/template/'.$template->code.'.json'));

        $preview = json_decode($jsonString);


            // First method ////////////////////////////// *****************************************

        // $options = new Options();
        // $options->set('defaultFont', 'Courier');
        // $options->set('isJavascriptEnabled', TRUE);
        // $options->set('isHtml5ParserEnabled' , true);
        // $options->set('isRemoteEnabled' , true);
        // $dompdf = new Dompdf($options);

        // $html = view('template.pdf.index')->with(
        //     [
        //         "preview" => $preview,
        //         "contact" => $contact,
        //         "proposal"=> $proposal,
        //         "brand" => $brand,
        //         "brand_settings" => $brand_settings,
        //         "template" => $template
        //     ]
        // )->render();

        // $dompdf->loadHtml($html);


        // $dompdf->setPaper('A4', 'landscape');


        // $dompdf->render();


        // return $dompdf->stream();


        // dd('hit');

        //  ***********************************
        // Second method //////////////////////////////

        // $dompdf = new \PDF;

        // $dompdf = \PDF::loadView('template.pdf.index',
        //     [
        //         "preview" => $preview,
        //         "contact" => $contact,
        //         "proposal"=> $proposal,
        //         "brand" => $brand,
        //         "brand_settings" => $brand_settings,
        //         "template" => $template
        //     ]
        // )->setPaper('letter', 'portrait')
        // ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        // // PDF::loadView('pdf',compact(['invoices','staff','to','total_amount','date','invoice_no','image']))->setPaper('letter', 'portrait')
        // // ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);


        // return $dompdf->download('pdfview.pdf');




        return view("template.pdf.index")->with([
            "preview" => $preview,
            "contact" => $contact,
            "proposal"=> $proposal,
            "brand" => $brand,
            "brand_settings" => $brand_settings,
            "template" => $template
        ]);
    }


    public static function createtemplate($brandid){
        $code = self::RandomString();
        $template= Template::create([
            'user_id' => Auth::user()->id,
            'name' => $code,
            'description' => '..',
            'code' => $code,
            'config' => '.',
            'preview' => ".",
            'editable' => '.',
            'brand_id' => $brandid
        ]);
        // $path = '/uploads/images';
        // $file->move();
        Storage::disk('template')->put("$code.json", json_encode([
            'name' => $code,
            'description' => '..',
            'code' => $code,
            'config' => '',
            'preview' => '',
            'editable' => '',
        ]));

        return $template->id;
    }


    public static function duplicatetemplate($template_id ,$brandid){
        $code = self::RandomString();
        $template= Template::create([
            'user_id' => Auth::user()->id,
            'name' => $code,
            'description' => '..',
            'code' => $code,
            'config' => '.',
            'preview' => ".",
            'editable' => '.',
            "brand_id" => $brandid
        ]);
        // $path = '/uploads/images';
        // $file->move();

        $reftemplate = Template::where('id' , $template_id)->first();

        $jsonString = file_get_contents(base_path('storage/app/template/'.$reftemplate->code.'.json'));
        Storage::disk('template')->put("$code.json", $jsonString  );

        return $template->id;
    }


    public static function RandomString($length = 8) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;

    }

    public function outstanding()
    {
        return view('proposal.outstanding');
    }

    public function accepted()
    {
        return view('proposal.accepted');
    }
    public function lost()
    {
        return view('proposal.lost');
    }
}
