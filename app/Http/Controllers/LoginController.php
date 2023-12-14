<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:10',
            'password' => 'required|string|max:20|min:10',
        ]);
        
        if(!auth()->attempt($request->only('username', 'password'))){
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        $user = Auth::user();

        return redirect()->route('layouts');
    
    }
}
