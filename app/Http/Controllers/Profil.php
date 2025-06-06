<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profil extends Controller
{
    public function showFarizqi()
    {
        return view('profil.farizqi');
    }
     public function showYudha()
    {
        return view('profil.yudha');
    }
     public function showSoviki()
    {
        return view('profil.soviki');
    }
}
