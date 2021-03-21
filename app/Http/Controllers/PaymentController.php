<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //



    // First Payment Setup

    public function setupindex(){
        return view('first-login.paymentsetup');
    }

    public function initialcheckout(Request $request){
        dd($request->all());
    }



}
