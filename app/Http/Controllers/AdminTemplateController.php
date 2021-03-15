<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTemplateController extends Controller
{
    //

    public static function index(){

        return view('admin.template.index');
    }



}
