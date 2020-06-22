<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoAkademik extends Controller
{
    public function info()
    {
        return view('infoAkademik.info');
    }
    
}
