<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // Validate
        $credential = $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required'
        ]);

        // Sign in
        if (auth()->attempt($credential)) {

            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        // Redirect
        return back()->with('loginError', 'Login failed!');
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
