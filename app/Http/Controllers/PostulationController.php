<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Offer;
use App\Models\Postulation;
use Illuminate\Http\Request;

class PostulationController extends Controller
{

    public function mostrar()
    {
        $offers = Offer::all();
        $companies = Company::all();
        
        return view('postulation.index', [
            'offers' => $offers,
            'companies' => $companies,
        ]);
    }

    // public function index($offerId)
    // {
    //     $offer = Offer::findOrFail($offerId);
    //     return view('postulation.index', ['offer' => $offer]);
    // }
    
    // public function showPostulationForm(Offer $offer)
    // {
    //     return view('postulation.form', compact('offer'));
    // }

    // public function storePostulation(Request $request, Offer $offer)
    // {
    //     // Valida los campos del formulario
    //     $validatedData = $request->validate([
    //         'cv' => 'required|mimes:pdf|max:2048', // PDF, máximo 2MB
    //         'cover_letter' => 'required|mimes:pdf|max:2048', // PDF, máximo 2MB
    //         // Agrega más validaciones según sea necesario
    //     ]);

    //     // Guarda los archivos en la carpeta de almacenamiento
    //     $cvPath = $request->file('cv')->store('cv');
    //     $coverLetterPath = $request->file('cover_letter')->store('cover_letter');

    //     // Crea una nueva postulación en la base de datos
    //     $postulation = new Postulation();
    //     $postulation->offer_id = $offer->id;
    //     // Asigna más campos de la postulación según sea necesario
    //     $postulation->cv_path = $cvPath;
    //     $postulation->cover_letter_path = $coverLetterPath;
    //     $postulation->save();

    //     // Redirecciona a una página de confirmación u otra vista
    //     return redirect()->route('postulation.confirmation');
    // }
}