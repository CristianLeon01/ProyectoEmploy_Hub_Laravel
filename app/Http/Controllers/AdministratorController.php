<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index(){
        

        $administrators = Administrator::all();
        return view("administrator.index", compact("administrators"));
    
    }

    public function create(){
        return view('administrator.create');
    }

    public function store(Request $request){
        Administrator::create($request->all());
        return redirect()->route('administrator.index');
    }

    public function edit(Administrator $administrator){
        return view('administrator.edit', compact('administrator'));
    }

    public function update(Request $request, Administrator $administrator){
        $administrator->update($request->all()); 
        return redirect()->route('administrator.index');
    }

    public function show(){
        return view('administrator.show', compact('administrator'));
    }

    public function destroy(Administrator $administrator){ 
        $administrator->delete();
        return redirect()->route('administrator.index');
    }

    public function header()
    {
        return view('layouts.headerAdmin');
    }
}
