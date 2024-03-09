<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstructorRequest;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Instructor

     public function instructor(Request $request){

        $instructor = Instructor::all();
        return response()->json($instructor);

    }

    // Funcion parecida al store para crear en este caso un nueva Instructor
    public function crearInstructor(InstructorRequest $request)
    {
        $instructor = new Instructor();
        $instructor->document_type = $request->input('document_type');
        $instructor->document_number = $request->input('document_number');
        $instructor->instructor_name = $request->input('instructor_name');
        $instructor->instructor_lastname = $request->input('instructor_lastname');
        $instructor->email = $request->input('email');
        $instructor->password = $request->input('password');
        $instructor->id_administrators = $request->input('id_administrators');
        $instructor->save();
        return response()->json(['mensaje' => 'Instructor insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $instructor = Instructor::where('id', $id)->first();
        if (empty($instructor)){
            return response()->json(['message' => 'Instructor no encontrado'], 404);
        }
        return response()->json($instructor, 200);
    }
}
