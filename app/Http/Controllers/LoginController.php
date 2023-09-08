<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        // validasi
        $request->validate([
            'textEmail' => 'email:filter',
            'textPassword' => 'min:6'
        ]);
        $dataLogin = [
            'email' =>$request->textEmail,
            'password' =>$request->textPassword
        ];
        // proses
        if(Auth::attempt($dataLogin)) {
            $request->session()->regenerate(); 
            if (Auth::user()->role == 'Masyarakat') {
                return redirect()->intended('/index')->with('success','Anda berhasil Login sebagai Masysarakat');
            }
            elseif (Auth::user()->role == 'Admin') {
                return redirect()->intended('/admin')->with('success','Anda berhasil Login sebagai Administrator');
            }
            elseif (Auth::user()->role == 'Petugas') {
                return redirect()->intended('/admin')->with('success','Anda berhasil Login sebagai Petugas');
            } }
        return redirect()->back()->with('gagal','login gagal silahkan isi dengan benar');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success','Anda Berhasil Logout');
    }
}
 