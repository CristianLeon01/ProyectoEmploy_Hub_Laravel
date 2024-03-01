<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateApiController extends Controller
{
    //Esta funcion muestra los datos que hay de occupaciones

    public function state(Request $request){

        $state = State::all();
        return response()->json($state);

    }

    // Funcion parecida al store para crear en este caso un nuevo cargo
    public function crearState(Request $request)
    {
        $request->validate([
            'state_name' => 'required', 'in:IN PROGRESS,IN CONTRACT, INTERVIEW, PRE-SELECTED, HIRED,  REFUSED',
            'status_description' => 'required|string|max:500',
        ]);

        $state = new State();
        $state->state_name = $request->input('state_name');
        $state->status_description = $request->input('status_description');
        $state->save();
        return response()->json(['mensaje' => 'Estado insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $state = State::where('id', $id)->first();
        if (empty($state)){
            return response()->json(['message' => 'Estado no encontrado'], 404);
        }
        return response()->json($state, 200);
    }
}
