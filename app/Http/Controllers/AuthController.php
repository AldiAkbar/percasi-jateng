<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // buat function index yang akan redirect ke homepage
    public function login(){
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function register() {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function forgot() {
        return view('auth.forgot-password',[
            'title' => 'Forgot Password'
        ]);
    }

         /**
     * Membuat Function Untuk Mengauthentikasi 
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function authenticate(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Email atau password anda salah!');
    }

    public function registration(Request $request) {
        $validated = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        // $request->session()->flash('success', 'Registration success. Please login.');
        return redirect('/login')->with('success', 'Registrasi sukses! Silahkan login.');
    }

     /**
     * Membuat Function Untuk Logout
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logout sukses.');
    }

}