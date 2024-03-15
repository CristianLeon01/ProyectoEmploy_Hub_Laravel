<?php

namespace App\Http\Controllers;

use App\Http\Requests\RelationRequest;
use App\Models\Relation;
use Illuminate\Http\Request;

class RelationApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Relation

     public function relation(Request $request){

        $relation = Relation::all();
        return response()->json($relation);

    }

    // Funcion parecida al store para crear en este caso un nueva Relation
    public function crearRelation(RelationRequest $request)
    {
        $relation = new Relation();
        $relation->name_related_occupation = $request->input('name_related_occupation');
        $relation->id_occupations = $request->input('id_occupations');
        $relation->occupation_name = $request->input('occupation_name');
        $relation->save();
        return response()->json(['mensaje' => 'Relation insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $relation = Relation::where('id', $id)->first();
        if (empty($relation)){
            return response()->json(['message' => 'Relation no encontrado'], 404);
        }
        return response()->json($relation, 200);
    }
}
