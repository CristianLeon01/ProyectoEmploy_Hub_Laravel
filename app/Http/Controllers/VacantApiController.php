<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacantRequest;
use App\Models\Vacant;
use Illuminate\Http\Request;

class VacantApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Vacant

     public function vacant(Request $request){

        $vacant = Vacant::all();
        return response()->json($vacant);

    }

    // Funcion parecida al store para crear en este caso un nueva Vacant
    public function crearVacant(VacantRequest $request)
    {
        $vacant = new Vacant();
        $vacant->number_vacancies_applied = $request->input('number_vacancies_applied');
        $vacant->id_offers = $request->input('id_offers');
        $vacant->id_localities = $request->input('id_localities');
        $vacant->id_contract_types = $request->input('id_contract_types');
        $vacant->weighings_id = $request->input('weighings_id');
        $vacant->save();
        return response()->json(['mensaje' => 'Vacant insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $vacant = Vacant::where('id', $id)->first();
        if (empty($vacant)){
            return response()->json(['message' => 'Vacant no encontrado'], 404);
        }
        return response()->json($vacant, 200);
    }
}
