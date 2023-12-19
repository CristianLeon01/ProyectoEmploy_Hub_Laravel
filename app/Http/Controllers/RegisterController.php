<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function create(array $data)
    {
        $user = User::create([
            'username' => $data['username'],
            'password' => Hash::make ($data['password']),
            'email' => $data['email'],
            'id_user_types' => $data['id_user_types']
        ]);

        Mail::to($data['email'])->send(new WelcomeEmail($user));
        return $user;
        
        // $validator = Validator::make($data, [
        //     'username' => 'required|string|max:10',
        //     'password' => 'required|string|max:20|min:10',
        //     'id_user_types' => 'unique:users',
        // ]);

        // if ($validator->fails()) {
        //     return redirect('register')
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        //return view('auth.register');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'username' => 'required|string|max:10',
        //     'password' => 'required|string|max:20|min:10|unique',
        // ]);

        // if(!auth()->attempt($request->only('username', 'password'))){
        //     return back()->with('mensaje', 'Credenciales incorrectas');
        // }

        // $user = Auth::user();

        //return redirect()->route('layouts');
    }
}