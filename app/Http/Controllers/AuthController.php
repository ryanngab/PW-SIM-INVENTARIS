<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Route Login
    public function index() {
        return view('auth.login');
    }
    public function authanticate(Request $request)
    {

        $login = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin-dashboard');
        }

        return back()->with('loginError', 'Login gagal! Silahkan coba lagi');
    }

    // Route register
    public function register() {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:50',
            'username' => ['required','min:3','max:50', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:50'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Registrasi berhasil!! silahkan Login');
    }

    // Route Reset Pw
    public function reset() {
        return view('auth.reset');
    }

    
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }

}
