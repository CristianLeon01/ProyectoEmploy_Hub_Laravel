<?php

namespace App\Http\Controllers;

use App\Http\Requests\OccupationRequest;
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

    public function Store(OccupationRequest $request){

        $occupation = new Occupation($request->validated());
        $occupation->save();
        return redirect('occupation')->with('success', 'Ocupación creada exitosamente');
    }

    public function Edit (Occupation $occupation){
        return view('occupation.edit', compact('occupation'));
    }


    public function Update(OccupationRequest $request, Occupation $occupation){
        
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
