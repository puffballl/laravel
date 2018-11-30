<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TennisteamControler extends Controller
{
    public function forms(){
        return view('layout.form');
    }

    public function home(){
        return view('homepage');
    }

    public function about(){
        return view('layout.about');
    }
}
