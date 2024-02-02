<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function redirect()
    {
        // Puedes agregar lógica adicional aquí antes de redirigir
        return view('notRegister.index');
    }
}
