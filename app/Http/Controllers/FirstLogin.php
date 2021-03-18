<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Brand_settings;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class FirstLogin extends Controller
{
    //


    public function index(){
        // dd('hit');
        return view('first-login.welcome');
    }

    // public function details(){
    //     return view('first-login.account-details');
    // }


    public function save(Request $request){
        // dd($request->file('company_logo'));

        $company_name = Auth::user()->company;


        $brand = Brand::create([

            "language" => "English",
            "brand_name" => $company_name,
            "company_name" => $company_name,
            "default_brand" => 0,
            "user_id" => Auth::user()->id,
            "strength" => $request->strength,
            "currency" => $request->currency


        ]);

        Brand_settings::create([
            "brand_email" => Auth::user()->email,
            "brand_id" => $brand->id,
            "email_title" => "Proposal From $brand->brand_name"

        ]);

        if($request->currency){

        }



        if ($request->file('company_logo')) {
            // dd("hit");
            // Define upload path
            $files = $request->file('company_logo');
            $destinationPath = public_path('/companylogo/'); // upload path

            // Upload Orginal Image
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);

            $insert['image'] = "$profileImage";

            // Save In Database




            $brand->company_logo = "$profileImage";

            $brand->save();

        }

        if($request->productname){
            Product::create([
                'name'=> $request->productname,
                "user_id" => Auth::user()->id
            ]);
        }


        // updateuser

        $user = User::where('id' , Auth::user()->id)->first();

        $user->first_login = 0;

        $user->save();



        return redirect(URL::to('/'));





    }

}
