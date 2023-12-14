<?php

namespace App\Http\Controllers;

use App\Models\igrate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BienvenidaController extends Controller
{
    public function redirect()
    {
        // Puedes agregar lógica adicional aquí antes de redirigir
        return view('layouts.app');
    }
}