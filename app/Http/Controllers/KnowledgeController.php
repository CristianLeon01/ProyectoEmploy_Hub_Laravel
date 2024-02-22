<?php

namespace App\Http\Controllers;

use App\Http\Requests\KnowledgeRequest;
use App\Models\Knowledge;
use App\Models\Occupation;
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

        $knowledgeData = $request->validated();
        $knowledge = new Knowledge($knowledgeData);
        $knowledge->save();
        return redirect('knowledge')->with('success', 'Denominacion creada exitosamente');

    }

    public function Edit (Knowledge $knowledge){

        $id_occupations = Occupation::all();
        return view('knowledge.edit', 
        ['id_occupations' => $id_occupations])->with('knowledge', $knowledge);

    }


    public function Update(KnowledgeRequest $request, Knowledge $knowledge){
        
        $knowledge->update($request->validated());
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
