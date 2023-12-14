<?php

namespace App\Http\Controllers;

use App\Models\Functionn;
use Illuminate\Http\Request;

class FunctionController extends Controller
{
    public function Functionn (){

        $funtions = Functionn::all();
        return view("funtion.index", compact("funtions"));
    }
    
    public function Create(){
        return view('funtion.create');
    }

    public function Store(Request $request){

        Functionn::create($request->all());
        return redirect()->route('funtion');
    }

    public function Edit (Functionn $funtion){
        return view('funtion.edit', compact('funtion'));
    }


    public function Update(Request $request, Functionn $funtion){
        
        $funtion->update($request->all()); 
        return redirect()->route('funtion');
    }

    public function Show(Functionn $funtion){
        return view ('funtion.show', compact('funtion'));
    }

    public function Destroy (Request $request, Functionn $funtion){ 
        $funtion->delete();
        return redirect()->route('funtion');
    }
}
