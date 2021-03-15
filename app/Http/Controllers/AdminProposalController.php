<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProposalController extends Controller
{
    //

    public static function index(){

        return view('admin.proposal.index');
    }
}
