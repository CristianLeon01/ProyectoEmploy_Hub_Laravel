<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdministratorRequest;
use App\Models\Administrator;
use Illuminate\Http\Request;

class AdministratorApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Administrador

     public function administrator(Request $request){

        $administrator = Administrator::all();
        return response()->json($administrator);

    }

    // Funcion parecida al store para crear en este caso un nueva Administrador
    public function crearAdministrator(AdministratorRequest $request)
    {
        $administrator = new Administrator();
        $administrator->document_number = $request->input('document_number');
        $administrator->document_type = $request->input('document_type');
        $administrator->name = $request->input('name');
        $administrator->last_name = $request->input('last_name');
        $administrator->email = $request->input('email');
        $administrator->password = $request->input('password');
        $administrator->id_user_types = $request->input('id_user_types');
        $administrator->save();
        return response()->json(['mensaje' => 'Administrador insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $administrator = Administrator::where('id', $id)->first();
        if (empty($administrator)){
            return response()->json(['message' => 'Administrador no encontrado'], 404);
        }
        return response()->json($administrator, 200);
    }
}
