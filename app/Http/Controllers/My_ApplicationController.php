<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class My_ApplicationController extends Controller
{
    public function index()
    {
        // Obtener todas las ofertas
        $offers = Offer::all();
        
        return view('my_application.index', compact('offers'));
    }
    
    // public function mostrar(Offer $offers)
    // {
    //     $offers= Offer::all();
        
    //     return view('my_application.index', [
    //         compact ('offers')
    //     ]);
    // }

    public function mostrar($id_offers)
    {
        $offer = Offer::findOrFail($id_offers);
    
        return view('my_application.index', compact('offer'));
    }
}
