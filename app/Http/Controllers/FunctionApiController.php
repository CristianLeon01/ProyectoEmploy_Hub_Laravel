<?php

namespace App\Http\Controllers;

use App\Http\Requests\FunctionRequest;
use App\Models\Functionn;
use Illuminate\Http\Request;

class FunctionApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Functionn

     public function function(Request $request){

        $function = Functionn::all();
        return response()->json($function);

    }

    // Funcion parecida al store para crear en este caso un nueva Functionn
    public function crearFunction(FunctionRequest $request)
    {
        $function = new Functionn();
        $function->function_description = $request->input('function_description');
        $function->id_occupations = $request->input('id_occupations');
        $function->occupation_name = $request->input('occupation_name');
        $function->save();
        return response()->json(['mensaje' => 'Functionn insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $function = Functionn::where('id', $id)->first();
        if (empty($function)){
            return response()->json(['message' => 'Functionn no encontrado'], 404);
        }
        return response()->json($function, 200);
    }
}
