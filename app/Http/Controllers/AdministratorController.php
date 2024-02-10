<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\UserType;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index(){
        
        $administrators = Administrator::all();
        return view('administrator.index', compact('administrators'));
    }

    public function create(){

        $user_types = UserType::all();
        return view('administrator.create',['user_types'=> $user_types]);
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
