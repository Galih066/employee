<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index ()
    {
        return view ('login');
    }

    public function authenticate (LoginRequest $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            switch (Auth::user()->role) {
                case 'ADMIN':
                    return redirect()->route('admin_dashboard');
                case 'EMPLOYEE':
                    return redirect()->route('');
                default:
                    return redirect()->route('login_page');
            }
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout (Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login_page');
    }
}
