<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecruiterRequest;
use App\Models\Recruiter;
use Illuminate\Http\Request;

class RecruiterApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Recruiter

     public function recruiter(Request $request){

        $recruiter = Recruiter::all();
        return response()->json($recruiter);

    }

    // Funcion parecida al store para crear en este caso un nueva Recruiter
    public function crearRecruiter(RecruiterRequest $request)
    {
        $recruiter = new Recruiter();
        $recruiter->number_document = $request->input('number_document');
        $recruiter->document_type = $request->input('document_type');
        $recruiter->name = $request->input('name');
        $recruiter->phone = $request->input('phone');
        $recruiter->email = $request->input('email');
        $recruiter->id_user_types = $request->input('id_user_types');
        $recruiter->save();
        return response()->json(['mensaje' => 'Recruiter insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $recruiter = Recruiter::where('id', $id)->first();
        if (empty($recruiter)){
            return response()->json(['message' => 'Recruiter no encontrado'], 404);
        }
        return response()->json($recruiter, 200);
    }
}
