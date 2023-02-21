<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email:dns|max:255|unique:users',
            'password' => 'required|min:3|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        // dd('ok');
        User::create($validatedData);
        // Store user
        // Sign the user in
        // $request->session()->flash('success', 'Registration successful! Please Login');

        return redirect('/login')->with('success', 'Registration successful! Please Login');
    }
}
