<?php

namespace App\Http\Controllers;

use App\Http\Requests\RelationRequest;
use App\Models\Relation;
use App\Models\UserType;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function Relation (){

        $relations = Relation::all();
        return view("relation.index", ["relations"=> $relations]);
    }
    
    public function Create(){

        $user_types = UserType::all();
        return view('/relation/create',['user_type'=> $user_types]);
    }

    public function Store(Request $request){

        $relation = new Relation($request->validated());
        $relation->save();

        return redirect('relation')->with('success',  'Relacion creada exitosamente');
    }

    public function Edit (Relation $relation){

        $user_types = UserType::all();

        return view('relation.edit', [
            '$user_types' => $user_types,
        ])->with('relation', $relation);
    }


    public function Update(RelationRequest $request, Relation $relation){
        
        $relation->update($request->all()); 
        return redirect()->route('relation');
    }

    public function Show(Relation $relation){
        return view ('relation.show', compact('relation'));
    }

    public function Destroy (Request $request, Relation $relation){ 
        $relation->delete();
        return redirect()->route('relation');
    }
}