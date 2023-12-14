<?php

namespace App\Http\Controllers;

use App\Models\Vacant;
use Illuminate\Http\Request;

class VacantController extends Controller
{
    public function Vacant (){

        $vacancies = Vacant::all();
        return view("vacant.index", compact("vacancies"));
    }
    
    public function Create(){
        return view('vacant.create');
    }

    public function Store(Request $request){

        Vacant::create($request->all());
        return redirect()->route('vacant');
    }

    public function Edit (Vacant $vacant){
        return view('vacant.edit', compact('vacant'));
    }


    public function Update(Request $request, Vacant $vacant){
        
        $vacant->update($request->all()); 
        return redirect()->route('vacant');
    }

    public function Show(Vacant $vacant){
        return view ('vacant.show', compact('vacant'));
    }

    public function Destroy (Request $request, Vacant $vacant){ 
        $vacant->delete();
        return redirect()->route('vacant');
    }
}
