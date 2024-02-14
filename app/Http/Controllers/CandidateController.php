<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidateRequest;
use App\Models\Candidate;
use App\Models\LifeSheet;
use App\Models\State;
use App\Models\UserType;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function Candidate (){

        $candidates = Candidate::all();
        return view("candidate.index", ["candidates" => $candidates]);
    }
    
    public function Create(){

        $user_types = UserType::all();
        $states = State::all();
        $id_life_sheets = LifeSheet::all();
        return view('candidate.create', ['user_types' => $user_types, 'states' => $states, 'id_life_sheets' => $id_life_sheets]);
    }

    public function Store(CandidateRequest $request){

        $candidate = new Candidate($request->validated());
        $candidate->save();
        return redirect('candidate')->with('success', 'Candidato creado exitosamente');
    }

    public function Edit (Candidate $candidate){
        return view('candidate.edit', compact('candidate'));
    }


    public function Update(Request $request, Candidate $candidate){
        
        $candidate->update($request->all()); 
        return redirect()->route('candidate');
    }

    public function Show(Candidate $candidate){
        return view ('candidate.show', compact('candidate'));
    }

    public function Destroy (Request $request, Candidate $candidate){ 
        $candidate->delete();
        return redirect()->route('candidate');
    }

    public function header()
    {
        return view('layouts.headerCandidate');
    }
}