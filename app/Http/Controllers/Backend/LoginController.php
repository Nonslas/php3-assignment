<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // echo Auth::id();
        // dd(Hash::make('admin'));
        // dd(Auth::check());
    	return view('backend.auth');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, true)) {
            // return redirect()->route('dashboard');
            echo 'success';
        }

        // return redirect()->route('login');
    }

}
