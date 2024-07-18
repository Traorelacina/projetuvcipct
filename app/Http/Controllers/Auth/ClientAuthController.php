<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.client-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('client')->attempt($credentials)) {
            return redirect()->intended('/client/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }//
}
