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
}