<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidateRequest;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Candidate

     public function candidate(Request $request){

        $candidate = Candidate::all();
        return response()->json($candidate);

    }

    // Funcion parecida al store para crear en este caso un nueva Candidate
    public function crearCandidate(CandidateRequest $request)
    {
        $candidate = new Candidate();
        $candidate->number_document = $request->input('number_document');
        $candidate->document_type = $request->input('document_type');
        $candidate->name = $request->input('name');
        $candidate->phone = $request->input('phone');
        $candidate->email = $request->input('email');
        $candidate->id_life_sheet = $request->input('id_life_sheet');
        $candidate->id_user_types = $request->input('id_user_types');
        $candidate->id_state = $request->input('id_state');
        $candidate->save();
        return response()->json(['mensaje' => 'Candidate insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $candidate = Candidate::where('id', $id)->first();
        if (empty($candidate)){
            return response()->json(['message' => 'Candidate no encontrado'], 404);
        }
        return response()->json($candidate, 200);
    }
}
