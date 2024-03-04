<?php

namespace App\Http\Controllers;

use App\Http\Requests\OccupationRequest;
use App\Models\Occupation;
use Illuminate\Http\Request;

class OccupationApiController extends Controller
{
    //Esta funcion muestra los datos que hay de occupaciones

    public function occupation(Request $request){

        $occupation = Occupation::all();
        return response()->json($occupation);

    }

    // Funcion parecida al store para crear en este caso un nuevo cargo
    public function crearOccupation(OccupationRequest $request)
    {
        $occupation = new Occupation();
        $occupation->occupation_name = $request->input('occupation_name');
        $occupation->occupation_description = $request->input('occupation_description');
        $occupation->id_post = $request->input('id_post');
        $occupation->save();
        return response()->json(['mensaje' => 'Occupation insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $occupation = Occupation::where('id', $id)->first();
        if (empty($occupation)){
            return response()->json(['message' => 'Occupacion no encontrado'], 404);
        }
        return response()->json($occupation, 200);
    }
}
