<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpeningController extends Controller
{
    function index(){
        return view('openings.index'); 
    }
    function create()
    {
        return view('openings.create');
    }
    function about()
    {
        return view('openings.about');
    }
}
