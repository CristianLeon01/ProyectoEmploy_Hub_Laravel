<?php

namespace App\Http\Controllers;

use App\Models\Contract_type;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function Offer (){

        $offers = Offer::all();
        return view("offer.index", ["offers"=> $offers]);
    }
    
    public function Create(){

        $contract_types = Contract_type::all();
        return view('/offer/create',['contract_types'=> $contract_types]);
    }

    public function Store(Request $request){

        $offer = new Offer();
        $offer->name_vacant = $request->input('name_vacant');
        $offer->description_vacant = $request->input('description_vacant');
        $offer->name_company = $request->input('name_company');
        $offer->address = $request-> input('address');        
        $offer->salary= $request->input('salary');
        $offer->start_date = $request->input('start_date');
        $offer->end_date = $request->input('end_date');
        $offer->months_experience = $request->input('months_experience');
        $offer->requirements = $request->input('requirements');
        $offer->id_contract_types = $request->input('id_contract_types');
        $offer->save();

        return redirect()->route('offer');
    }

    public function Edit (Offer $offer){
        return view('offer.edit', compact('offer'));
    }


    public function Update(Request $request, Offer $offer){
        
        $offer->update($request->all()); 
        return redirect()->route('offer');
    }

    public function Show(Offer $offer){
        return view ('offer.show', compact('offer'));
    }

    public function Destroy (Request $request, Offer $offer){ 
        $offer->delete();
        return redirect()->route('offer');
    }
}
