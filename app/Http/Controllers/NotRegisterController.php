<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotRegisterController extends Controller
{
    public function mostrarNotRegister()
    {
        return view('notRegister.index');
    }
}
