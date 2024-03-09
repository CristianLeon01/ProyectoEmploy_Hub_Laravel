<?php

namespace App\Http\Controllers;

use App\Http\Requests\AbilityRequest;
use App\Models\Ability;
use Illuminate\Http\Request;

class AbilityApiController extends Controller
{
     //Esta funcion muestra los datos que hay de habilidades

     public function skill(Request $request){

        $skill = Ability::all();
        return response()->json($skill);

    }

    // Funcion parecida al store para crear en este caso un nueva Habilidad
    public function crearSkill(AbilityRequest $request)
    {
        $skill = new Ability();
        $skill->skill_name = $request->input('skill_name');
        $skill->skill_description = $request->input('skill_description');
        $skill->id_occupations = $request->input('id_occupations');
        $skill->occupation_name = $request->input('occupation_name');
        $skill->save();
        return response()->json(['mensaje' => 'Habilidad insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $skill = Ability::where('id', $id)->first();
        if (empty($skill)){
            return response()->json(['message' => 'Habilidad no encontrado'], 404);
        }
        return response()->json($skill, 200);
    }
}
