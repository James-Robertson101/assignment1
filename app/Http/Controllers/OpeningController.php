<?php

namespace App\Http\Controllers;

use App\Models\Opening;
use Illuminate\Http\Request;

class OpeningController extends Controller
{
    function index(){
        $openings = Opening::all();
        return view('openings.index',['openings'=>$openings]); 
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
