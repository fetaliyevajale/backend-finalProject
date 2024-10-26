<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Giriş uğurludursa, admin panelinə yönləndir
            return redirect()->intended('admin/dashboard');
        }

        // Giriş uğursuz olarsa, geri qaytar və xətanı göstər
        return back()->withErrors([
            'email' => 'Bu email və ya şifrə düzgün deyil.',
        ]);
    }
}
