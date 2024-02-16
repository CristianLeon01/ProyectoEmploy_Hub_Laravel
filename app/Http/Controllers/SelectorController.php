<?php

namespace App\Http\Controllers;

use App\Http\Requests\SelectorRequest;
use App\Models\Selector;
use App\Models\UserType;
use Illuminate\Http\Request;

class SelectorController extends Controller
{
    public function Selector (){


        $selectors = Selector::all();
        return view("selector.index", compact("selectors"));
    }
    
    public function Create(){

        $user_types = UserType::all();
        return view('/selector/create',['user_type'=> $user_types]);
    }

    public function Store(Request $request){

        // $selector = new Selector($request->validated());
        // $selector->save();

        // return redirect('selector')->with('success', 'Seleccionador creado exitosamente');

        Selector::create($request->all());
        return redirect()->route('selector');
    }

    public function Edit (Selector $selector){
        return view('selector.edit', compact('selector'));
    }


    public function Update(Request $request, Selector $selector){
        
        $selector->update($request->all()); 
        return redirect()->route('selector');
    }

    public function Show(Selector $selector){
        return view ('selector.show', compact('selector'));
    }

    public function Destroy (Request $request, Selector $selector){ 
        $selector->delete();
        return redirect()->route('selector');
    }

    public function header()
    {
        return view('layouts.headerSelector');
    }
}
