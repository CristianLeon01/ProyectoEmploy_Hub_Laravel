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
        $companies = Company::all();
        
        return view('postulation.index', [
            'offer' => $oferta,
            'companies' => $companies,
        ]);
    }

    public function postulacionExitosa()
    {
        return view('postulation.successful');
    }

    public function miAplicacion()
    {
        return view('my_application.index');
    }
}