<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Marketplace extends Controller
{
    //

    public static function index(){
       return view('marketplace.templates.index');
    }



    public static function gettemplate(Request $request){

        // Duplication Template
        $template_id = TemplatePageController::duplicatetemplate($request->id);


        return redirect('/template');


    }

    public static function covers(){
       return view('marketplace.covers.index');

    }

    public static function getcover(Request $request){

        $coverid = CoverController::duplicate($request->id);

        return redirect("/cover");

    }

}
