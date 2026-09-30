<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index()
    {
        return view('front.home');
    }
    function about()
    {   
        // print_r('hello about page');exit;
        return view('front.about');
    }
}
