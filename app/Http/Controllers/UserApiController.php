<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserApiController extends Controller
{
    //Esta funcion muestra los datos que hay de usuarios

    public function users(Request $request){
        $users = User::all();
        return response()->json($users);
    }

    // Funcion para verificar si un usuario esta registrado dependiendo de su correo y contraseña

    public function login(Request $request){

        $response = ["status"=>0, "msg"=>""];

        $data = json_decode($request->getContent());

        $user = User::where('email', $data->email)->first();

        if($user){

            if(Hash::check($data->password, $user->password)){
                $token = $user->createToken("example");

                $response["status"] = 1;
                $response["msg"] = $token->plainTextToken;
            }else{
                $response["msg"] = "Credenciales incorrectas";
            }

        }else{
            $response["msg"] = "Usuario no encontrado";
        }

        return response()->json($response);
    }

    // Funcion parecida al store para crear en este caso un nuevo cargo
    public function crearUser(UserRequest $request)
    {
        // $request->validate([
        //     'username' => 'required|string|max:255',
        //     'id_user_types' => 'required|exists:user_types,id',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' =>  'required|string|min:8',
        // ]);
        
        $user = new User();
        $user->username = $request->input('username');
        $user->id_user_types = $request->input('id_user_types');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        return response()->json(['mensaje' => 'User insertado correctamente'], 201);
    }

    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $user = User::where('id', $id)->first();
        if (empty($user)){
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
        return response()->json($user, 200);
    }
}