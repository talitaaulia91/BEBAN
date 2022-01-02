<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    public function login()
    {
        return view('log-in', [
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request)
    {
      
        $credentials = [
            'NIM' => $request->NIM,
            'password' => $request->password,
        ];

        if(Auth::guard('mahasiswa')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }
        return back()->with(['loginError' => 'Username atau Password salah']);
    }

    public function logout(Request $request){
        if(Auth::guard('mahasiswa')->check()){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
    }
}
