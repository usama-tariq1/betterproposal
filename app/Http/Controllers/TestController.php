<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public static function index(){
        // dd('hit');


        return response()->json([
            "msg" => 'hello'
        ]);
    }
}
