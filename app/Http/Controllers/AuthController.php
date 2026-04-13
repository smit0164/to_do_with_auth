<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showLogin()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        $validated = $request->validate([
           'email'=>'required|email',
           'password'=>'required',
        ]);

        if(Auth::attempt($validated)){
           return redirect()->route('index');
        }

        return back()->withErrors([
            'email'=>"Invalid credentials.",
        ])->withInput();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function showRegister(Request $request)
    {
        return view('register');
    }

    /**
     * Display the specified resource.
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);
        $user = User::create($validated);
        Auth::login($user);
        return redirect()->route('index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
