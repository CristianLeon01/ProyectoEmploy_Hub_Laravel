<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserTypeRequest;
use App\Models\UserType;
use Illuminate\Http\Request;

class UserTypeApiController extends Controller
{
     //Esta funcion muestra los datos que hay de UserType

     public function user_type(Request $request){

        $user_type = UserType::all();
        return response()->json($user_type);

    }

    // Funcion parecida al store para crear en este caso un nueva UserType
    public function crearUserType(UserTypeRequest $request)
    {
        $user_type = new UserType();
        $user_type->user_type_name = $request->input('user_type_name');
        $user_type->save();
        return response()->json(['mensaje' => 'UserType insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $user_type = UserType::where('id', $id)->first();
        if (empty($user_type)){
            return response()->json(['message' => 'UserType no encontrado'], 404);
        }
        return response()->json($user_type, 200);
    }
}
