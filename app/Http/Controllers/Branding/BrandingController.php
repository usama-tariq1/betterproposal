<?php

namespace App\Http\Controllers\Branding;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Brand;
use App\Brand_settings;
use Illuminate\Support\Facades\Auth;

class BrandingController extends Controller
{
    //
    public static function index(){
        return view('settings.branding.index');
    }

    public static function add(){
        return view('settings.branding.add');
    }


    public static function store(Request $request){
        // dd($request->all());

        $brand = Brand::create([

            "language" => $request->language,
            "brand_name" => $request->brand_name,
            "company_name" => $request->company_name,
            "default_brand" => 0,
            "user_id" => Auth::user()->id,

        ]);

        Brand_settings::create([
            "brand_email" => Auth::user()->email,
            "brand_id" => $brand->id,
            "email_title" => "Proposal From $brand->brand_name"

        ]);


        return redirect()->back();

    }

    public static function edit(Request $request){

        $brand = Brand::where([
            "user_id" => Auth::user()->id,
            "id" => $request->id,
        ])->first();


        // dd($brands);

        return view('settings.branding.edit')->with('brand', $brand);
    }

    public static function update(Request $request){
        $brand = Brand::where([
            "user_id" => Auth::user()->id,
            "id" => $request->id,
        ])->first();

        $brand->company_name = $request->company_name;
        $brand->brand_name = $request->brand_name;
        $brand->language = $request->language;

        $brand->save();

        return redirect()->back();

    }

    public static function sidebar(Request $request){
        $brand = Brand::where([
            "user_id" => Auth::user()->id,
            "id" => $request->id,
        ])->first();
        return view('settings.branding.sidebar')->with('brand', $brand);
    }


    public static function sidebarupdate(Request $request){

        // dd($request->file('companylogo'));


        // return view('settings.branding.sidebar')->with('brand', $brand);



        request()->validate([
            'companylogo' => ['required'],
        ]);
        if ($files = $request->file('companylogo')) {

            // Define upload path
            $destinationPath = public_path('/companylogo/'); // upload path

            // Upload Orginal Image
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);

            $insert['image'] = "$profileImage";

            // Save In Database
            // dd('inside');


            $brand = Brand::where([
                "user_id" => Auth::user()->id,
                "id" => $request->id,
            ])->first();

            $brand->company_logo = "$profileImage";

            $brand->save();

        }else{
            dd('hit');
        }
        return back()->with('success', 'Image Upload successfully');



    }



    public static function email(Request $request){
        $brand = Brand::where([
            "user_id" => Auth::user()->id,
            "id" => $request->id,
        ])->with('brand_settings')->first();

        // dd($brand);
        return view('settings.branding.email')->with('brand', $brand);
    }

    public static function emailupdate(Request $request){


        $brand_settings = Brand_settings::where([
            "brand_id" => $request->id,

        ])->first();


        // dd($brand);


        $brand_settings->brand_email = $request->brand_email;
        $brand_settings->email_title = $request->email_title;
        $brand_settings->email_message = $request->email_message;
        $brand_settings->thanks_title = $request->thanks_title;
        $brand_settings->thanks_message = $request->thanks_message;



        $brand_settings->save();

        return redirect()->back();









    }



}
