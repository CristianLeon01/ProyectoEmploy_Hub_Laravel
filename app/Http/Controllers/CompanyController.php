<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\UserType;


class CompanyController extends Controller
{
    public function Company()
    {
        $companies = Company::all();
        return view("company.index", ["companies" => $companies]);
    }

    public function Create()
    {
        $id_user_types = UserType::all();
        $id_post = Post::all();
        return view('company.create', ['id_user_types' => $id_user_types, 'id_post' => $id_post]);
    }

    public function Store(CompanyRequest $request)
    {;

        $company = new Company($request->validated());
        $company->save();
        return redirect('company')->with('success', 'Com    pañia creada exitosamente');
    }

    public function Edit(Company $company)
    {
        $id_user_types = UserType::all();
        $id_post = Post::all();
    
        $company->load('id_user_types', 'id_post');
    
        return view('company.edit', [
            'id_user_types' => $id_user_types,
            'id_post' => $id_post,
            'company' => $company,
        ]);
    }

    public function Update(CompanyRequest $request, Company $company)
    {

        $company->update($request->all());
        return redirect()->route('company');
    }

    public function Show(Company $company)
    {
        return view('company.show', compact('company'));
    }

    public function Destroy(Request $request, Company $company)
    {
        $company->delete();
        return redirect()->route('company');
    }

    public function header()
    {
        return view('layouts.headerCompany');
    }
}