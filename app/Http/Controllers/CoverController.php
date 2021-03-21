<?php

namespace App\Http\Controllers;

use App\Covers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class CoverController extends Controller
{
    //


    // public static function cover(){
    //     return view('admin.covers.index');

    // }


    public static function index(){
        return view('template.cover');

    }

    public static function preview(){

    }

    public static function add(Request $request){
        // dd($request->all());

        $cover = Covers::create([
            "name" => $request->name,

            "user_id" => Auth::user()->id,
            "brand_id" => $request->brand_id
        ]);


        $coverid = $cover->id;


        return redirect(URL::to("/cover/edit/$coverid"));




    }

    public static function edit(Request $request){
        // dd("hit");

        $cover = Covers::where([
            "user_id" => Auth::user()->id,
            "id" => $request->id
        ])->first();


        return view("template.editcover")->with([
            "cover" => $cover
        ]);

    }

    public static function update(Request $request){

        $cover = Covers::where([
            "user_id" => Auth::user()->id,
            "id" => $request->id
        ])->first();

        // dd($request->all());

        if($request->file('cover')){
            $files = $request->file('cover');

            $destinationPath = public_path('/covers/'); // upload path

            // Upload Orginal Image
            $coverimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $coverimage);

            $insert['image'] = "$coverimage";

            $cover->cover = $coverimage;
        }


        $cover->cover_for = $request->cover_for;
        $cover->cover_to = $request->cover_to;
        $cover->cover_from = $request->cover_from;

        $cover->save();

        return redirect()->back();
    }

    public static function duplicate($coverid , $brandid){
        $original = Covers::where('id', $coverid)->first();


        $cover = Covers::create([
            "name" => $original->name,
            "cover_for" => $original->cover_for,
            "cover_to" => $original->cover_to,
            "cover_from" => $original->cover_from,
            "cover" => $original->cover,
            "user_id" => Auth::user()->id,
            "brand_id" => $brandid
        ]);


        return $cover->id;

    }

    public static function delete(Request $request){
        $cover = new Covers;
        $cover = $cover::where([
            ["id" , $request->id],
            ['user_id' , Auth::user()->id]
        ])->first();


        $cover->delete();


        // dd($template);
        return redirect()->back();
    }


}
