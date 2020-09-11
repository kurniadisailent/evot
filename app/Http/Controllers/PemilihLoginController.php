<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilih;
use Auth;

class PemilihLoginController extends Controller
{
    public function getLogin()
    {
        return view('guest.loginuser');
    }

    public function postLogin(Request $request)
    {
  
        // validasi
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('pemilih')->attempt(['username' => $request->username, 'password' => $request->password])) {
            // Pindah ke halaman dashboard
            return redirect()->intended('/');
        }else{
            return redirect()->route('guest.loginuser')->with('gagal','Username atau Password salah');
        }

    }

    public function logout()
    {
        if (Auth::guard('pemilih')->check()) {
            Auth::guard('pemilih')->logout();
        } 
        return redirect('/login');
    }
}
