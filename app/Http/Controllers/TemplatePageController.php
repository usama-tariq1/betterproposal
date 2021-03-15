<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TemplatePage;
use App\Template;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class TemplatePageController extends Controller
{

    public function template()
    {
        return view('template.template');
    }

    public function index()
    {

        $template = new Template;
        $templates = $template->where('user_id' , Auth::user()->id)->get();

        return view('template.template')->with(compact(
            'templates'
        ));
    }

    public function edit(Request $request){
        $templateid = $request->id;

        $template =  Template::where([
            ["id" , $templateid],
            ['user_id' , Auth::user()->id]
        ])->first();

        $templatecode = $template->code;

        $jsonString = file_get_contents(base_path('storage/app/template/'.$templatecode.'.json'));

        $templateconfig = json_decode($jsonString);


        // dd($template);

        // var a = 2;

        return view('template.edit')->with([
            "template" => $template,
            "templateconfig" => $templateconfig
        ]);

    }

    public function delete(Request $request){
        $templateid = $request->id;

        $template = new Template;
        $template = $template->where([
            ["id" , $templateid],
            ['user_id' , Auth::user()->id]
        ])->first();


        $template->delete();


        // dd($template);
        return redirect()->back();


    }



    public function startTemplate()
    {
        return view('template.start-template');
    }


    public function createTemplate(Request $request )
    {
        $temp = Template::create([
            'name' => $request->TemplateName,
        ]);
        $temp_id = $temp->id;
        return redirect()->route('template.create',[$temp_id]);
    }


    public static function duplicatetemplate($template_id){


        $orignal  = Template::where('id' , $template_id)->first();



        $code = self::RandomString();
        $template= Template::create([
            'user_id' => Auth::user()->id,
            'name' => $orignal->name,
            'description' => '..',
            'code' => $code,
            'config' => '.',
            'preview' => ".",
            'editable' => '.',
        ]);
        // $path = '/uploads/images';
        // $file->move();

        $reftemplate = Template::where('id' , $template_id)->first();

        $jsonString = file_get_contents(base_path('storage/app/template/'.$reftemplate->code.'.json'));
        Storage::disk('template')->put("$code.json", $jsonString  );

        return $template->id;
    }

    public function addPage(Request $request){
        TemplatePage::create([
            'template_id'=> $request->id_val
        ]);
        return back();
    }

    // public function templateCreate($id){
    //     $template_pages   = TemplatePage::all();
    //     return view('start.create-template',[
    //         'template_pages' => $template_pages,
    //         'id' => $id
    //     ]);
    // }

    // public function cover()
    // {
    //     return view('template.cover');
    // }

    public static function templateinit(){
        $templateid = self::RandomString();



        // return view('template.blocks.templateinit')->with([
        //     "blockid" => $blockid,
        // ]);


        $template = view('template.blocks.templateinit')->with([
            "blockid" => $templateid,
        ])->render();


        return response()->json([
            "template" => $template,
            "templateid" => $templateid
        ]);

    }

    public static function addsection(){
        $sectionid = self::RandomString();

        $section = view('template.blocks.section')->with([
            "sectionid" => $sectionid,
        ])->render();


        return response()->json([
            "section" => $section,
            "sectionid" => $sectionid
        ]);

    }

    public static function addblock(Request $request){

        $blockid = self::RandomString();
        $order = $request->order +1;

        // dd($blockid);

        $block = view('template.blocks.'.$request->name.'')->with([
            "blockid" => $blockid,
            "order" => $order
        ])->render();

        // dd($block);

        return response()->json([
            "block" => $block ,
            "blockid" => $blockid
        ]);


    }


    public static function add(){
        return view('template.start');

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

    public static function updatetemplate(Request $request){
        // dd($request->all());

        $template = new Template;
        $templates = $template->where('code' , $request->code)->get();
        // dd(count($templates));
        if(count($templates) ==0){
            // $template->create([
            //     'name' => $request->templatename,
            //     'description' => $request->templatedescription,
            //     'code' => $request->code,
            //     'config' => $request->config,
            //     'preview' => $request->preview,
            //     'editable' => $request->editable,
            // ]);

            $template->create([
                'user_id' => Auth::user()->id,
                'name' => $request->templatename,
                'description' => $request->templatedescription,
                'code' => $request->code,
                'config' => '.',
                'preview' => ".",
                'editable' => '.',
            ]);
            // $path = '/uploads/images';
            // $file->move();
            Storage::disk('template')->put("$request->code.json", json_encode([
                'name' => $request->templatename,
                'description' => $request->templatedescription,
                'code' => $request->code,
                'config' => $request->config,
                'preview' => $request->preview,
                'editable' => $request->editable,
            ]));

            return response()->json([
                "status" => 200,
            ]);
        }
        else{

            $template = Template::where('code' , $request->code)->first();
            $template->name = $request->templatename;
            $template->description = $request->templatedescription;

            $template->save();



            // Read File
            // dd(base_path('storage/app/template/'.$request->code.''));

            $jsonString = file_get_contents(base_path('storage/app/template/'.$request->code.'.json'));

            $data = json_decode($jsonString, true);

            // dd($data);



            // Update Key
            // dd($data['name']);

            $data['name'] = $request->templatename;
            $data['description'] = $request->templatedescription;
            $data['config'] = $request->config;
            $data['preview'] = $request->preview;
            $data['editable'] = $request->editable;



            // Write File

            $newJsonString = json_encode($data);

            file_put_contents(base_path('storage/app/template/'.$request->code.'.json'), $newJsonString);

            return response()->json([
                "status" => 200,
            ]);



        }
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

}
