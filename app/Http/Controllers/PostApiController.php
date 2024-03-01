<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    //Esta funcion muestra los datos que hay de cargos

    public function post(Request $request){
        $post = Post::all();
        return response()->json($post);
    }

    // Funcion parecida al store para crear en este caso un nuevo cargo
    public function crearPost(PostRequest $request)
    {
        // $request->validate([
        //     'name_post' => 'required|string|max:300',
        //     'description' => 'required|string|max:500',
        // ]);

        $post = new Post();
        $post->name_post = $request->input('name_post');
        $post->description = $request->input('description');
        $post->save();

        return response()->json(['mensaje' => 'Cargo insertado correctamente'], 201);
    }
    
    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $post = Post::where('id', $id)->first();
        if (empty($post)){
            return response()->json(['message' => 'Cargo no encontrado'], 404);
        }
        return response()->json($post, 200);
    }
}
