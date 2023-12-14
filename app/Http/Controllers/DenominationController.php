<?php

namespace App\Http\Controllers;

use App\Models\Denomination;
use Illuminate\Http\Request;

class DenominationController extends Controller
{
    public function Denomination (){

        $denominations = Denomination::all();
        return view("denomination.index", compact("denominations"));
    }
    
    public function Create(){
        return view('denomination.create');
    }

    public function Store(Request $request){

        Denomination::create($request->all());
        return redirect()->route('denomination');
    }

    public function Edit (Denomination $denomination){
        return view('denomination.edit', compact('denomination'));
    }


    public function Update(Request $request, Denomination $denomination){
        
        $denomination->update($request->all()); 
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
