<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeighingRequest;
use App\Models\Weighing;
use Illuminate\Http\Request;

class WeighingApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Weighing

     public function weighings(Request $request){

        $weighings = Weighing::all();
        return response()->json($weighings);

    }

    // Funcion parecida al store para crear en este caso un nueva Weighing
    public function crearWeighing(WeighingRequest $request)
    {
        $weighings = new Weighing();
        $weighings->languages = $request->input('languages');
        $weighings->education = $request->input('education');
        $weighings->work_experience = $request->input('work_experience');
        $weighings->technical_skills = $request->input('technical_skills');
        $weighings->previous_project = $request->input('previous_project');
        $weighings->references = $request->input('references');
        $weighings->additional_course = $request->input('additional_course');
        $weighings->save();
        return response()->json(['mensaje' => 'Weighing insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $weighings = Weighing::where('id', $id)->first();
        if (empty($weighings)){
            return response()->json(['message' => 'Weighing no encontrado'], 404);
        }
        return response()->json($weighings, 200);
    }
}
