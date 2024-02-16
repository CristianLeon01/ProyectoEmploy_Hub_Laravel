<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostulationController extends Controller
{
    public function mostrar()
    {
        return view('postulation.index');
    }
}
