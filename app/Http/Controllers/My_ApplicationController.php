<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class My_ApplicationController extends Controller
{
    
    public function mostrar(Offer $offers)
    {
        $offers= Offer::all();
        
        return view('my_application.index', [
            compact ('offers')
        ]);
    }
}
