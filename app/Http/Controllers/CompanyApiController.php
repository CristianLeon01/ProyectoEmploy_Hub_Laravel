<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyApiController extends Controller
{
     //Esta funcion muestra los datos que hay de Company

     public function company(Request $request){

        $company = Company::all();
        return response()->json($company);

    }

    // Funcion parecida al store para crear en este caso un nueva Company
    public function crearCompany(CompanyRequest $request)
    {
        $company = new Company();
        $company->company_name = $request->input('company_name');
        $company->legal_representative = $request->input('legal_representative');
        $company->company_type = $request->input('company_type');
        $company->NIT = $request->input('NIT');
        $company->number_workers = $request->input('number_workers');
        $company->legal_representative_email = $request->input('legal_representative_email');
        $company->nature = $request->input('nature');
        $company->email = $request->input('email');
        $company->phone = $request->input('phone');
        $company->alternate_phone = $request->input('alternate_phone');
        $company->human_resources_manager = $request->input('human_resources_manager');
        $company->phone_2 = $request->input('phone_2');
        $company->alternate_phone_2 = $request->input('alternate_phone_2');
        $company->email_manager = $request->input('email_manager');
        $company->id_user_types = $request->input('id_user_types');
        $company->id_post = $request->input('id_post');
        $company->save();
        return response()->json(['mensaje' => 'Company insertado correctamente'], 201);
    }


    // Metodo para consultar por Id a un usuario especifico
    // Metodo where se usa para filtrar la busqueda segun el id

    public function getById($id) {
        $company = Company::where('id', $id)->first();
        if (empty($company)){
            return response()->json(['message' => 'Company no encontrado'], 404);
        }
        return response()->json($company, 200);
    }
}
