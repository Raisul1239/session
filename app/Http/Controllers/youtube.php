<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class youtube extends Controller
{
    //
    function index(Request $request)
    {
        print_r($request->input());
    }
}