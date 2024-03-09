<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Location

     public function location(Request $request){

        $location = Location::all();
        return response()->json($location);

    }

    // Funcion parecida al store para crear en este caso un nueva Location
    public function crearLocation(LocationRequest $request)
    {
        $location = new Location();
        $location->location_name = $request->input('location_name');
        $location->save();
        return response()->json(['mensaje' => 'Location insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $location = Location::where('id', $id)->first();
        if (empty($location)){
            return response()->json(['message' => 'Location no encontrado'], 404);
        }
        return response()->json($location, 200);
    }
}
