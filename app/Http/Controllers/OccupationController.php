<?php

namespace App\Http\Controllers;

use App\Models\Occupation;
use Illuminate\Http\Request;

class OccupationController extends Controller
{
    public function Occupation (){

        $occupations = Occupation::all();
        return view("occupation.index", compact("occupations"));
    }
    
    public function Create(){
        return view('occupation.create');
    }

    public function Store(Request $request){

        Occupation::create($request->all());
        return redirect()->route('occupation');
    }

    public function Edit (Occupation $occupation){
        return view('occupation.edit', compact('occupation'));
    }


    public function Update(Request $request, Occupation $occupation){
        
        $occupation->update($request->all()); 
        return redirect()->route('occupation');
    }

    public function Show(Occupation $occupation){
        return view ('occupation.show', compact('occupation'));
    }

    public function Destroy (Request $request, Occupation $occupation){ 
        $occupation->delete();
        return redirect()->route('occupation');
    }
}
