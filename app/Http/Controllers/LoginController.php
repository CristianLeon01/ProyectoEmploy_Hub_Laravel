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
        session(['user_types' => $user->id_user_types]);

        switch ($user->id_user_types) {
            case 1:
                return redirect()->route('headerAdmin');
            case 2:
                return redirect()->route('headerSelector');
            case 3:
                return redirect()->route('headerRecruiter');
            case 4:
                return redirect()->route('headerCandidate');
            case 5:
                return redirect()->route('headerCompany');
        }
    }
}