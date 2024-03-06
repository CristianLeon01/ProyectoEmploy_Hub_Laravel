<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContractTypeRequest;
use App\Models\Contract_type;
use Illuminate\Http\Request;

class ContractTypeApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Contract_type

     public function contract_type(Request $request){

        $contract_type = Contract_type::all();
        return response()->json($contract_type);

    }

    // Funcion parecida al store para crear en este caso un nueva Contract_type
    public function crearContractType(ContractTypeRequest $request)
    {
        $contract_type = new Contract_type();
        $contract_type->contract_name = $request->input('contract_name');
        $contract_type->description = $request->input('description');
        $contract_type->save();
        return response()->json(['mensaje' => 'Contract_type insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $contract_type = Contract_type::where('id', $id)->first();
        if (empty($contract_type)){
            return response()->json(['message' => 'Contract_type no encontrado'], 404);
        }
        return response()->json($contract_type, 200);
    }
}
