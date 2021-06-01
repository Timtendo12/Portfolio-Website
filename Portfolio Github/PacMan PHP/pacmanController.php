<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pacmanController extends Controller
{
    function index (){
        return view('pacman');
    }
}
