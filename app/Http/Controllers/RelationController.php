<?php

namespace App\Http\Controllers;

use App\Http\Requests\RelationRequest;
use App\Models\Occupation;
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

        return view('relation.create');;
    }

    public function Store(RelationRequest $request){

        $relationData = $request->validated();
        $relation = new Relation($relationData);
        $relation->save();
        return redirect('relation')->with('success', 'Denominacion creada exitosamente');
    }

    public function Edit (Relation $relation){

        $id_occupations = Occupation::all();
        return view('relation.edit', 
        ['id_occupations' => $id_occupations])->with('relation', $relation);
    }


    public function Update(RelationRequest $request, Relation $relation){

        $relation->update($request->validated());
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