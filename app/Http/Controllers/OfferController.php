<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Contract_type;
use App\Models\Offer;
use App\Models\Vacant;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function Offer(Request $request)
    {
        if ($request->has('q')) {
            return $this->search($request);
        }

        $offers = Offer::all();

        $vacancies = [];
        foreach ($offers as $offer) {
            $vacancies[$offer->id] = Vacant::where('id_offers', $offer->id)->get();
        }

        return view("offer.index", [
            "offers" => $offers,
            "vacancies" => $vacancies,

        ]);
    }


    public function Create(){

        $contract_type = Contract_type::all();
        return view('offer.create',['contract_type'=> $contract_type]);
    }

    public function Store(OfferRequest $request){

        $offerData = $request->validated();
        $offer = new Offer($offerData);
        $offer->save();
        return redirect('offer')->with('success', 'Oferta creada exitosamente');

        // Offer::create($request->all());
        // return redirect()->route('offer');
    }

    public function Edit (Offer $offer){

        $contract_type = Contract_type::all();
        return view('offer.edit', [
            'contract_type' => $contract_type,
        ])->with('offer', $offer);
        //return view('offer.edit', compact('offer'));
    }

    public function Update(OfferRequest $request, Offer $offer){
        $offer->update($request->validated());
        return redirect()->route('offer');
    }

    public function Show(Offer $offer){
        return view ('offer.show', compact('offer'));
    }

    public function Destroy (Request $request, Offer $offer){
        $offer->delete();
        return redirect()->route('offer');
    }

    public function search(Request $request)
{
    $query = $request->input('q');

    $experiencia = $request->input('experiencia');
    $tipo_contrato = $request->input('tipo_contrato');
    $tipo_jornada = $request->input('tipo_jornada');
    $salario = $request->input('salario');
    $fecha_publicacion = $request->input('fecha_publicacion');

    $queryBuilder = Offer::query();

    if ($query) {
        $queryBuilder->where('name_vacant', 'like', "%$query%");
    }

    if ($experiencia && $experiencia !== 'ninguna') {
        $queryBuilder->where('months_experience', $experiencia);
    }

    if ($tipo_contrato) {
        $queryBuilder->where('contract_type_id', $tipo_contrato);
    }

    if ($tipo_jornada) {
        $queryBuilder->where('tipo_jornada', $tipo_jornada);
    }

    if ($salario) {
        $queryBuilder->where('salario', $salario);
    }

    if ($fecha_publicacion) {
        $queryBuilder->where('fecha_publicacion', $fecha_publicacion);
    }

    // Obtener las ofertas encontradas en la búsqueda
    $results = $queryBuilder->get();

    // Obtener las vacantes asociadas a cada oferta encontrada
    $vacancies = [];
    foreach ($results as $result) {
        $vacancies[$result->id] = Vacant::where('id_offers', $result->id)->get();
    }

    return view('offer.index', compact('results', 'query', 'vacancies'));
}

}
