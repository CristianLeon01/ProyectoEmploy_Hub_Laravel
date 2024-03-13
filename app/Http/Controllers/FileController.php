<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('file.pages');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(File $file)
    {
        //
    }

    public function edit(File $file)
    {
        //
    }


    public function update(Request $request, File $file)
    {
        //
    }


    public function destroy(File $file)
    {
        //
    }
}
