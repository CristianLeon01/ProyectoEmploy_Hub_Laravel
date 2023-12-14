<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function State (){

        $states = State::all();
        return view("state.index", compact("states"));
    }
    
    public function Create(){
        return view('state.create');
    }

    public function Store(Request $request){

        State::create($request->all());
        return redirect()->route('state');
    }

    public function Edit (State $state){
        return view('state.edit', compact('state'));
    }


    public function Update(Request $request, State $state){
        
        $state->update($request->all()); 
        return redirect()->route('state');
    }

    public function Show(State $state){
        return view ('state.show', compact('state'));
    }

    public function Destroy (Request $request, State $state){ 
        $state->delete();
        return redirect()->route('state');
    }
}
