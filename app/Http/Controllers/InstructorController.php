<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstructorRequest;
use App\Models\Administrator;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function Instructor (){

        $instructors = Instructor::all();
        return view("instructor.index", compact("instructors"));
    }
    
    public function Create(){

        $id_administrators = Administrator::all();
        return view('instructor.create', 
        ['$id_administrators' => $id_administrators]);

        // return view('instructor.create');
    }

    public function Store(InstructorRequest $request){

        // $id_administrators = auth()->user()->id;

        // $instructorData = $request->validated();

        // $instructorData['id_administrators'] = $id_administrators;

        // $instructor = Instructor::create($instructorData);

        // return redirect()->route('instructor')->with('success', 'Instructor creado exitosamente');

        $instructorData = $request->validated();
        $instructor = new Instructor($instructorData);
        $instructor->save();
        return redirect('instructor')->with('success', 'Compañía creada exitosamente');
    }

    public function Edit (Instructor $instructor){

        $id_administrators = Administrator::all();
        return view('instructor.edit', 
        ['$id_administrators' => $id_administrators])->with('instructor', $instructor);

        // return view('instructor.edit', compact('instructor'));
    }


    public function Update(InstructorRequest $request, Instructor $instructor){
        
        $instructor->update($request->validated());
        return redirect()->route('instructor');
    }

    public function Show(Instructor $instructor){
        return view ('instructor.show', compact('instructor'));
    }

    public function Destroy (Request $request, Instructor $instructor){ 
        $instructor->delete();
        return redirect()->route('instructor');
    }
}
