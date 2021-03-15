<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function saveUser(Request $request){
        $validated = $request->validate([
            'email'        => 'required|unique:users',
            'name'         => 'required',
            'password'     => 'required',
            'company_name' => 'required',
        ]);
        User::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'password'     => $request->password,
            'company_name' => $request->company_name,
        ]);
        return back()->with('message', 'User Created Succesfully !');;
    }


    public static function dashboard(){
        return view('admin.dashboard');
    }


}
