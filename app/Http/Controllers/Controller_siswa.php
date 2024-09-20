<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_siswa extends Controller
{
    public function kelasswS()
    {
        $idk = 3;
        return view('kelasSW', compact('idk'));
    }
}
