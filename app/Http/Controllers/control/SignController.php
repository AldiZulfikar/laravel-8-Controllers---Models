<?php

namespace App\Http\Controllers\control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignController extends Controller
{
    function index(){
        return view("public.signin");
    }

    function authProcess(Request $request){
        return $request->all();
    }
}
