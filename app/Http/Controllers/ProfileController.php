<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //

    public function index(){
       return view('settings.profile.index');
    }


    public function update(Request $request){
        // dd($request->all());
        $user = User::where('id' , Auth::user()->id)->first();

        $user->name = $request->name;

        if ($request->file('profile_image')) {
            // dd("hit");
            // Define upload path
            $files = $request->file('profile_image');
            $destinationPath = public_path('/profileimage/'); // upload path

            // Upload Orginal Image
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);

            $insert['image'] = "$profileImage";

            // Save In Database




            $user->profile = "$profileImage";



        }

        $user->save();

        return redirect()->back();


    }


}
