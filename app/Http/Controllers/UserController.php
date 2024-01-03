<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function User (){

        $users = User::all();
        return view("user.index", ["users"=> $users]);
    }
    
    public function Create(){

        $user_types = UserType::all();
        return view('auth/register',['user_types'=> $user_types]);
    }

    public function Store(Request $request){

        $user = new User();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->id_user_types = $request->input('id_user_types');
        $user->password = Hash::make($request->password);
        $user->save();

        Mail::to($request['email'])->send(new WelcomeEmail($user));

        return view('auth.welcome');

        return redirect()->back()->with('mensaje',  'Usuario creado correctamente...');

    }

    public function Edit (User $user){
        return view('user.edit', compact('user'));
    }

    public function Update(Request $request, User $user){
        
        $user->update($request->all()); 
        return redirect()->route('user');
    }

    public function Show(User $user){
        return view ('user.show', compact('user'));
    }

    public function Destroy (Request $request, User $user){ 
        $user->delete();
        return redirect()->route('user');
    }
}
