<?php

namespace App\Http\Controllers;

use App\Http\Requests\LifeSheetRequest;
use App\Models\LifeSheet;
use Illuminate\Http\Request;

class LifeSheetApiController extends Controller
{
    //Esta funcion muestra los datos que hay de cargos

    public function lifeSheet(Request $request){
        $lifeSheet = LifeSheet::all();
        return response()->json($lifeSheet);
    }

    // Funcion parecida al store para crear en este caso un nuevo cargo
    public function crearLifeSheet(LifeSheetRequest $request)
    {
        // $request->validate([
        //     'name_post' => 'required|string|max:300',
        //     'description' => 'required|string|max:500',
        // ]);

        $lifeSheet = new LifeSheet();
        $lifeSheet->personal_description = $request->input('personal_description');
        $lifeSheet->languages = $request->input('languages');
        $lifeSheet->experience = $request->input('experience');
        $lifeSheet->education = $request->input('education');
        $lifeSheet->save();

        return response()->json(['mensaje' => 'Hoja de Vida insertado correctamente'], 201);
    }
    
    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $lifeSheet = LifeSheet::where('id', $id)->first();
        if (empty($lifeSheet)){
            return response()->json(['message' => 'Hoja de vida no encontrado'], 404);
        }
        return response()->json($lifeSheet, 200);
    }
}
