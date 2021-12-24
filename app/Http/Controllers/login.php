<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('log-in', [
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request)
    {
      
        $credentials = [
            'username' => $request->email,
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
