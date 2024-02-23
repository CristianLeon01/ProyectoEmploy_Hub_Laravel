<?php

namespace App\Http\Controllers;

use App\Models\Occupation;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    //

    public function users(Request $request){

        $users = User::all();
        return response()->json($users);

    }

    public function occupations(Request $request){

        $occupations = Occupation::all();
        return response()->json($occupations);

    }


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

    public function crearPost(Request $request)
    {
        $request->validate([
            'name_post' => 'required|string|max:300',
            'description' => 'required|string|max:500',
        ]);

        $post = new Post();
        $post->name_post = $request->input('name_post');
        $post->description = $request->input('description');
        $post->save();

        return response()->json(['mensaje' => 'Post insertado correctamente'], 201);
    }
    
}