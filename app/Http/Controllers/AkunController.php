<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function mahasiswa()
    {
        return view('akun.mahasiswa');
    }
    public function perusahaan()
    {
        return view('akun.perusahaan');
    }
}
