<?php

namespace App\Http\Controllers;

use App\Http\Requests\DenominationRequest;
use App\Models\Denomination;
use Illuminate\Http\Request;

class DenominationApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Denomination

     public function denomination(Request $request){

        $denomination = Denomination::all();
        return response()->json($denomination);

    }

    // Funcion parecida al store para crear en este caso un nueva Denomination
    public function crearDenomination(DenominationRequest $request)
    {
        $denomination = new Denomination();
        $denomination->denominate_description = $request->input('denominate_description');
        $denomination->id_occupations = $request->input('id_occupations');
        $denomination->occupation_name = $request->input('occupation_name');
        $denomination->save();
        return response()->json(['mensaje' => 'Denomination insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $denomination = Denomination::where('id', $id)->first();
        if (empty($denomination)){
            return response()->json(['message' => 'Denomination no encontrado'], 404);
        }
        return response()->json($denomination, 200);
    }
}
