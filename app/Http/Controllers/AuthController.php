<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->has('remember'); // Check if 'Remember Me' was selected

        if (Auth::attempt($credentials, $remember)) {
            // Successful login
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard'); // Redirect to intended page
        }

        // If login fails
        return back()->withErrors([
            'email' => 'email and password do not match',
        ])->onlyInput('email');
    }
}
