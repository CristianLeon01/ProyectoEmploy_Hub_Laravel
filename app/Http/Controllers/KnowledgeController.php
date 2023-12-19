<?php

namespace App\Http\Controllers;

use App\Http\Requests\KnowledgeRequest;
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

    public function Store(KnowledgeRequest $request){

        $knowledge = new Knowledge($request->validated());
        $knowledge->save();
        return redirect('knowledge')->with('success', 'Conocimientos creados exitosamente');
    }

    public function Edit (Knowledge $knowledge){
        return view('knowledge.edit', compact('knowledge'));
    }


    public function Update(KnowledgeRequest $request, Knowledge $knowledge){
        
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
