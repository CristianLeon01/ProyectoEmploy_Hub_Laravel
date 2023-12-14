<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    public function UserType (){

        $user_types = UserType::all();
        return view("usertype.index", compact("user_types"));
    }
    
    public function Create(){
        return view('usertype.create');
    }

    public function Store(Request $request){

        UserType::create($request->all());
        return redirect()->route('usertype');
    }

    public function Edit (UserType $usertype){
        return view('usertype.edit', compact('usertype'));
    }


    public function Update(Request $request, UserType $usertype){
        
        $usertype->update($request->all()); 
        return redirect()->route('usertype');
    }

    public function Show(UserType $usertype){
        return view ('usertype.show', compact('usertype'));
    }

    public function Destroy (Request $request, UserType $usertype){ 
        $usertype->delete();
        return redirect()->route('usertype');
    }
}
