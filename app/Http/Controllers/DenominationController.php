<?php

namespace App\Http\Controllers;

use App\Http\Requests\DenominationRequest;
use App\Models\Denomination;
use App\Models\Occupation;
use Illuminate\Http\Request;

class DenominationController extends Controller
{
    public function Denomination (){

        $denominations = Denomination::all();
        return view("denomination.index", compact("denominations"));
    }
    
    public function Create(){

        $id_occupations = Occupation::all();
        return view('denomination.create', 
        ['$id_occupations' => $id_occupations]);

        //return view('denomination.create');
    }

    public function Store(DenominationRequest $request){
        
        $denominationData = $request->validated();
        $denomination = new Denomination($denominationData);
        $denomination->save();
        return redirect('denomination')->with('success', 'Denominacion creada exitosamente');
    }    

    public function Edit (Denomination $denomination){

        $id_occupations = Occupation::all();
        return view('denomination.edit', 
        ['id_occupations' => $id_occupations])->with('denomination', $denomination);

        //return view('denomination.edit', compact('denomination'));
    }


    public function Update(DenominationRequest $request, Denomination $denomination){
        
        $denomination->update($request->validated());
        return redirect()->route('denomination');
    }

    public function Show(Denomination $denomination){
        return view ('denomination.show', compact('denomination'));
    }

    public function Destroy (Request $request, Denomination $denomination){ 
        $denomination->delete();
        return redirect()->route('denomination');
    }
}