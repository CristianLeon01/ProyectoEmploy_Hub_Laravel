<?php

namespace App\Http\Controllers;

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

        $relation = new Relation();
        $relation->name_related_occupation = $request->input('name_related_occupation');
        $relation->id_occupations = $request->input('id_occupations');
        $relation->occupation_name = $request->input('occupation_name ');
        $relation->save();

        return redirect()->back()->with('mensaje',  'Usuario creado correctamente...');;
    }

    public function Edit (Relation $relation){
        return view('relation.edit', compact('relation'));
    }


    public function Update(Request $request, Relation $relation){
        
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
