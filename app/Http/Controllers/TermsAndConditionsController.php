<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsAndConditionsController extends Controller
{
    public function mostrarTermsConditions()
    {
        return view('termsConditions.index');
    }
}
