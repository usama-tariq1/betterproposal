<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //

    public function index(){

    }

    public function addproduct(Request $request){
        $product = Product::create([
            "user_id" => Auth::user()->id,
            "name" => $request->name
        ]);


        return response()->json(
            [
                "id" => $product->id,
                "name" => $product->name
            ]
        );

    }


    public function getproduct(Request $request){
        $product = Product::where([
            "id" => $request->id

        ])->first();


        return response()->json(
            [
                "id" => $product->id,
                "name" => $product->name
            ]
        );

    }



}
