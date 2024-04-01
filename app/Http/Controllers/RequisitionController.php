<?php

namespace App\Http\Controllers;

use App\Models\Requisition;
use Illuminate\Http\Request;

class RequisitionController extends Controller
{
    public function Requisition (){

        $requisitions = Requisition::all();
        return view("requisition.index", ["requisitions" => $requisitions]);
    }

    public function Create(){
        return view('requisition.create');
    }

    public function Store(Request $request){

        $requisition = new Requisition($request->validated());
        $requisition->save();
        return redirect('requisition')->with('success', 'Candidato creado exitosamente');
    }

    public function Edit (Requisition $requisition){
        return view('requisition.edit', compact('requisition'));
    }


    public function Update(Request $request, Requisition $requisition){

        $requisition->update($request->all());
        return redirect()->route('requisition');
    }

    public function Show(Requisition $requisition){
        return view ('requisition.show', compact('requisition'));
    }

    public function Destroy (Request $request, Requisition $requisition){
        $requisition->delete();
        return redirect()->route('requisition');
    }
}
