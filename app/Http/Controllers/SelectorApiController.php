<?php

namespace App\Http\Controllers;

use App\Http\Requests\SelectorRequest;
use App\Models\Selector;
use Illuminate\Http\Request;

class SelectorApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Selector

     public function selector(Request $request){

        $selector = Selector::all();
        return response()->json($selector);

    }

    // Funcion parecida al store para crear en este caso un nueva Selector
    public function crearSelector(SelectorRequest $request)
    {
        $selector = new Selector();
        $selector->number_document_selector = $request->input('number_document_selector');
        $selector->document_type_selector = $request->input('document_type_selector');
        $selector->name_selector = $request->input('name_selector');
        $selector->email_selector = $request->input('email_selector');
        $selector->phone_selector = $request->input('phone_selector');
        $selector->id_user_types = $request->input('id_user_types');
        $selector->save();
        return response()->json(['mensaje' => 'Selector insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $selector = Selector::where('id', $id)->first();
        if (empty($selector)){
            return response()->json(['message' => 'Selector no encontrado'], 404);
        }
        return response()->json($selector, 200);
    }
}
