<?php

namespace App\Http\Controllers;

use App\Models\Contract_type;
use Illuminate\Http\Request;

class Contract_TypeController extends Controller
{
    public function Contract_type (){

        $contract_types = Contract_type::all();
        return view("contract_type.index", compact("contract_types"));
    }
    
    public function Create(){
        return view('contract_type.create');
    }

    public function Store(Request $request){

        Contract_type::create($request->all());
        return redirect()->route('contract_type');
    }

    public function Edit (Contract_type $contract_type){
        return view('contract_type.edit', compact('contract_type'));
    }


    public function Update(Request $request, Contract_type $contract_type){
        
        $contract_type->update($request->all()); 
        return redirect()->route('contract_type');
    }

    public function Show(Contract_type $contract_type){
        return view ('contract_type.show', compact('contract_type'));
    }

    public function Destroy (Request $request, Contract_type $contract_type){ 
        $contract_type->delete();
        return redirect()->route('contract_type');
    }
}
