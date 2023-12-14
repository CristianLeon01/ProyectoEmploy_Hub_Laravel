<?php

namespace App\Http\Controllers;

use App\Models\Knowledge;
use Illuminate\Http\Request;

class KnowledgeController extends Controller
{
    public function Knowledge (){

        $knowledges = Knowledge::all();
        return view("knowledge.index", compact("knowledges"));
    }
    
    public function Create(){
        return view('knowledge.create');
    }

    public function Store(Request $request){

        $knowledge = new Knowledge();
        $knowledge->knowledge_name = $request->input('knowledge_name');
        $knowledge->knowledge_description = $request->input('knowledge_description');
        $knowledge->id_occupations = $request->input('id_occupations');
        $knowledge->occupation_name = $request->input('occupation_name');
        $knowledge->save();


        return redirect()->route('knowledge');
    }

    public function Edit (Knowledge $knowledge){
        return view('knowledge.edit', compact('knowledge'));
    }


    public function Update(Request $request, Knowledge $knowledge){
        
        $knowledge->update($request->all()); 
        return redirect()->route('knowledge');
    }

    public function Show(Knowledge $knowledge){
        return view ('knowledge.show', compact('knowledge'));
    }

    public function Destroy (Request $request, Knowledge $knowledge){ 
        $knowledge->delete();
        return redirect()->route('knowledge');
    }
}
