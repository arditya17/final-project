<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;

use Redirect; //untuk redirect


use App\Mahasiswa;
use Illuminate\Http\Request;
use App\User;
use DB;

class AuthController extends Controller
{
    public function login()
    {
    	return view('authlogin2')->with('sukses','Anda Berhasil Login');
    }

    public function postlogin(Request $request)
    {
      // echo "$request->email.$request->password "; die;
    	if(Auth::attempt($request->only('email','password'))){
            $akun = DB::table('users')->where('email', $request->email)->first();
            //dd($akun);
            if($akun->role =='admin'){
                Auth::guard('admin')->LoginUsingId($akun->id);
                return redirect('/home')->with('sukses','Anda Berhasil Login');
            } else if($akun->role =='mahasiswa'){
                Auth::guard('mhs')->LoginUsingId($akun->id);
                return redirect('/berandaMahasiswa')->with('sukses','Anda Berhasil Login');
            }elseif ($akun->role =='perusahaan') {
              Auth::guard('psh')->LoginUsingId($akun->id);
              return redirect('/berandaPerusahaan')->with('sukses','Anda Berhasil Login');
            }
    	}
    	return redirect('/login')->with('error','Akun Belum Terdaftar');
    }

    public function logout()
    {
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        } else if(Auth::guard('mhs')->check()){
            Auth::guard('mhs')->logout();
        } else if(Auth::guard('psh')->check()){
            Auth::guard('psh')->logout();
        }
    	return redirect('login')->with('sukses','Anda Telah Logout');
    }


}