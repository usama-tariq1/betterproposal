<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //

    public function index(){
        return view('settings.productandservice.index');
    }

    public function add(Request $request){
        // dd($request->all());

        $product = Product::create([
            "user_id" => Auth::user()->id,
            "name" => $request->name
        ]);

        return redirect()->back()->with(['message' => "Product Added Successfully !"]);


    }


    public function delete(Request $request){
        $product = new Product();
        $product = $product::where([
            ["id" , $request->id],
            ['user_id' , Auth::user()->id]
        ])->first();

        $product->delete();


        return redirect()->back()->with(['message' => "Product Deleted Successfully ! "]);
    }


    public function update(Request $request){
        $product = Product::where([
            'id' => $request->id,
            'user_id' => Auth::user()->id
        ])->first();

        $product->name = $request->name;

        $product->save();

        return redirect()->back()->with(['message' => "Product Updated Successfully ! "]);

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
