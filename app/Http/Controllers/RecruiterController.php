<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecruiterRequest;
use App\Models\Recruiter;
use App\Models\UserType;
use Illuminate\Http\Request;

class RecruiterController extends Controller
{
    public function Recruiter (){


        $recruiters = Recruiter::all();
        return view("recruiter.index", ["recruiters"=> $recruiters]);
    }
    
    public function Create(){

        $user_types = UserType::all();
        return view('/recruiter/create',['user_type'=> $user_types]);
    }

    public function Store(RecruiterRequest $request){

        $recruiter = new Recruiter($request->validated());
        $recruiter->save();

        return redirect('recruiter')->with('success', 'Reclutador creado exitosamente');
    }

    public function Edit (Recruiter $recruiter){

        $user_types = UserType::all();

        return view('recruiter.edit', [
            '$user_types' => $user_types,
        ])->with('recruiter', $recruiter);
    }


    public function Update(Request $request, Recruiter $recruiter){
        
        $recruiter->update($request->all()); 
        return redirect()->route('recruiter');
    }

    public function Show(Recruiter $recruiter){
        return view ('recruiter.show', compact('recruiter'));
    }

    public function Destroy (Request $request, Recruiter $recruiter){ 
        $recruiter->delete();
        return redirect()->route('recruiter');
    }

    public function header()
    {
        return view('layouts.headerRecruiter');
    }
}