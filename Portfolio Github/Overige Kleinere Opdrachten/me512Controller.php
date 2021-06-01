<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class me512Controller extends Controller
{
    function index (){
        return view('morse_encoded');
    }
}
