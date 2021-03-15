<?php

namespace App\Http\Controllers;

use App\Covers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCoverController extends Controller
{
    //

    public static function cover(){
        return view('admin.covers.index');

    }

    public static function addcover(Request $request){
    //    dd($request->all()) ;

        $files = $request->file('cover');

        $destinationPath = public_path('/covers/'); // upload path

        // Upload Orginal Image
        $coverimage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $coverimage);

        $insert['image'] = "$coverimage";

       $cover = Covers::create([
           "name" => $request->name,
           "cover_for" => $request->for,
           "cover_to" => $request->to,
           "cover_from" => $request->cover_from,
           "cover" => $coverimage,
           "user_id" => Auth::user()->id
       ]);


        return redirect("/admin/covers");

    }


}
