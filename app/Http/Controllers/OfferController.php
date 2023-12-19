<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
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

        $offer = new Offer($request->validated());
        $offer->save();

        return redirect('offer')->with('success', 'Oferta creada exitosamente');
    }

    public function Edit (Offer $offer){
        return view('offer.edit', compact('offer'));
    }


    public function Update(OfferRequest $request, Offer $offer){
        
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
