<?php

namespace App\Http\Controllers;

use App\Models\Ability;
use Illuminate\Http\Request;

class AbilityController extends Controller
{
    public function Ability (){

        $skills = Ability::all();
        return view("skill.index", compact("skills"));
    }
    
    public function Create(){
        return view('skill.create');
    }

    public function Store(Request $request){

        Ability::create($request->all());
        return redirect()->route('skill');
    }

    public function Edit (Ability $skill){
        return view('skill.edit', compact('skill'));
    }


    public function Update(Request $request, Ability $skill){
        
        $skill->update($request->all()); 
        return redirect()->route('skill');
    }

    public function Show(Ability $skill){
        return view ('skill.show', compact('skill'));
    }

    public function Destroy (Request $request, Ability $skill){ 
        $skill->delete();
        return redirect()->route('skill');
    }
}
