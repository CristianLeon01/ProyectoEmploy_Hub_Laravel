<?php

namespace App\Http\Controllers;

use App\Http\Requests\LifeSheetRequest;
use App\Models\LifeSheet;
use Illuminate\Http\Request;

class LifeSheetController extends Controller
{
    public function LifeSheet (){

        $resumes = LifeSheet::all();
        return view("lifeSheet.index", compact("resumes"));
    }
    
    public function Create(){
        return view('lifeSheet.create');
    }

    public function Store(LifeSheetRequest $request){

        $lifeSheet = new LifeSheet($request->validated());
        $lifeSheet->save();
        return redirect('lifeSheet')->with('success', 'Hoja de vida creada Exitosamente');
    }

    public function Edit (LifeSheet $lifeSheet){
        return view('lifeSheet.edit', compact('lifeSheet'));
    }


    public function Update(LifeSheetRequest $request, LifeSheet $lifeSheet){
        
        $lifeSheet->update($request->all()); 
        return redirect()->route('lifeSheet');
    }

    public function Show(LifeSheet $lifeSheet){
        return view ('lifeSheet.show', compact('lifeSheet'));
    }

    public function Destroy (Request $request, LifeSheet $lifeSheet){ 
        $lifeSheet->delete();
        return redirect()->route('lifeSheet');
    }
}
