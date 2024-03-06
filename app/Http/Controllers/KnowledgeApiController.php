<?php

namespace App\Http\Controllers;

use App\Http\Requests\KnowledgeRequest;
use App\Models\Knowledge;
use Illuminate\Http\Request;

class KnowledgeApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Knowledge

     public function knowledge(Request $request){

        $knowledge = Knowledge::all();
        return response()->json($knowledge);

    }

    // Funcion parecida al store para crear en este caso un nueva Knowledge
    public function crearKnowledge(KnowledgeRequest $request)
    {
        $knowledge = new Knowledge();
        $knowledge->knoledge_name = $request->input('knoledge_name');
        $knowledge->knowledge_description = $request->input('knowledge_description');
        $knowledge->id_occupations = $request->input('id_occupations');
        $knowledge->occupation_name = $request->input('occupation_name');
        $knowledge->save();
        return response()->json(['mensaje' => 'Knowledge insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $knowledge = Knowledge::where('id', $id)->first();
        if (empty($knowledge)){
            return response()->json(['message' => 'Knowledge no encontrado'], 404);
        }
        return response()->json($knowledge, 200);
    }
}
