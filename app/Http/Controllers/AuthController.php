<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    
    public function showLoginForm()
    {
        return view('admin.login');
    }

    
    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard'); 
            } else {
                return back()->withErrors(['error' => 'Admin girişinə icazə yoxdur.']);
            }
        }

        return back()->withErrors(['error' => 'Bu email və ya şifrə düzgün deyil.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.login.form');
    }
}
