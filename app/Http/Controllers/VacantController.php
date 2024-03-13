<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Contract_type;
use App\Models\Location;
use App\Models\Offer;
use App\Models\Vacant;
use App\Models\Weighing;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class VacantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies = Vacant::all();
        return view('vacant.index', ['vacancies' => $vacancies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offers = Offer::all();
        $cities = City::all();
        $contract_types = Contract_type::all();
        $weightings = Weighing::all();
        return view('vacant.create', compact('offers', 'cities', 'contract_types', 'weightings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacancy= new Vacant;
        $vacancy->number_vacancies_applied = $request->number_vacancies_applied;
        $vacancy->id_offers = $request->id_offers;
        $vacancy->city_id = $request->city_id;
        $vacancy->id_contract_types = $request->id_contract_types;
        $vacancy->weighings_id = $request->weighings_id;
        $vacancy->save();

        return redirect()->route('vacant.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
