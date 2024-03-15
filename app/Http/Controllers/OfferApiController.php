<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Offer

     public function offer(Request $request){

        $offer = Offer::all();
        return response()->json($offer);

    }

    // Funcion parecida al store para crear en este caso un nueva Offer
    public function crearOffer(OfferRequest $request)
    {
        $offer = new Offer();
        $offer->name_vacant = $request->input('name_vacant');
        $offer->description_vacant = $request->input('description_vacant');
        $offer->name_company = $request->input('name_company');
        $offer->address = $request->input('address');
        $offer->salary = $request->input('salary');
        $offer->start_date = $request->input('start_date');
        $offer->end_date = $request->input('end_date');
        $offer->months_experience = $request->input('months_experience');
        $offer->requirements = $request->input('requirements');
        $offer->id_contract_types = $request->input('id_contract_types');
        $offer->save();
        return response()->json(['mensaje' => 'Offer insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $offer = Offer::where('id', $id)->first();
        if (empty($offer)){
            return response()->json(['message' => 'Offer no encontrado'], 404);
        }
        return response()->json($offer, 200);
    }
}
