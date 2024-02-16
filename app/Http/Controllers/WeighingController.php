<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeighingRequest;
use App\Models\Weighing;
use Illuminate\Http\Request;

class WeighingController extends Controller
{
    public function Weighing (){

        $weightings = Weighing::all();
        return view("weighing.index", compact("weightings"));
    }
    
    public function Create(){
        return view('weighing.create');
    }

    public function Store(WeighingRequest $request){
        
        $weighing = new Weighing($request->validated());
        $weighing->save();

        return redirect('weighing')->with('success', 'Ponderaciones creadas exitosamente');
    }

    public function Edit (Weighing $weighing){
        return view('weighing.edit', compact('weighing'));
    }


    public function Update(WeighingRequest $request, Weighing $weighing){
        
        $weighing->update($request->all()); 
        return redirect()->route('weighing');
    }

    public function Show(Weighing $weighing){
        return view ('weighing.show', compact('weighing'));
    }

    public function Destroy (Request $request, Weighing $weighing){ 
        $weighing->delete();
        return redirect()->route('weighing');
    }
}