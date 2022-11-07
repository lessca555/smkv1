<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function soal_tersedia()
    {
        return view('soal.soal');
    }
}
