<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Offer;
use App\Models\Postulation;
use Illuminate\Http\Request;

class PostulationController extends Controller
{

    public function mostrar(Offer $oferta)
    {
        $user = auth()->user();
        $isPostulated = Postulation::where('id_user', $user->id)
                                    ->where('id_offer', $oferta->id)
                                    ->exists();
    
        if ($isPostulated) {
            return redirect()->route('offer')->with('error', 'Ya estás postulado a esta oferta.');
        }
    
        $companies = Company::all();
        return view('postulation.index', [
            'offer' => $oferta,
            'companies' => $companies,
        ]);
    }
    

    public function postulacionExitosa()
    {
        $offer = Offer::latest()->first();
    
        return view('postulation.successful', compact('offer'));
    }
    
    public function miAplicacion()
    {
        return view('my_application.index');
    }
}