<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('home');
            }elseif (auth()->user()->role == 'mahasiswa') {
                return redirect()->route('adminHome');
            }elseif (auth()->user()->role == 'perusahaan') {
                return redirect()->route('perusahaan');
            }
        }else{
            return redirect()->route('login')
            ->with('error','Email-Address And Password Are Wrong.');
        }

        
    }

    // if(Auth::attempt($request->only('email','password'))){
    //     $akun = DB::table('users')->where('email', $request->email)->first();
    //     //dd($akun);
    //     if($akun->role =='admin'){
    //         Auth::guard('admin')->LoginUsingId($akun->id);
    //         return redirect('/home')->with('sukses','Anda Berhasil Login');
    //     } else if($akun->role =='mahasiswa'){
    //         Auth::guard('mhs')->LoginUsingId($akun->id);
    //         return redirect('/home')->with('sukses','Anda Berhasil Login');
    //     }elseif ($akun->role =='perusahaan') {
    //       Auth::guard('psh')->LoginUsingId($akun->id);
    //       return redirect('/home')->with('sukses','Anda Berhasil Login');
    //     }
    // }
    // return redirect('/login')->with('error','Akun Belum Terdaftar');

    // if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
    // {
    //     if (auth()->user()->role == 'admin') {
    //         return redirect()->route('home');
    //     }elseif (auth()->user()->role == 'mahasiswa') {
    //         return redirect()->route('mahasiswa');
    //     }elseif (auth()->user()->role == 'perusahaan') {
    //         return redirect()->route('perusahaan');
    //     }
    // }else{
    //     return redirect()->route('login')
    //     ->with('error','Email-Address And Password Are Wrong.');
    // }

    // if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
    //     {
    //         if (auth()->user()->is_admin == 1) {
    //             return redirect()->route('admin.home');
    //         }elseif (auth()->user()->surat_suara == 0) {
    //             return redirect()->route('adminHome');
    //         }elseif (auth()->user()->surat_suara == 1) {
    //             return redirect()->route('home');
    //         }
    //     }else{
    //         return redirect()->route('login')
    //         ->with('error','Email-Address And Password Are Wrong.');
    //     }
    }