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
        $user_types = UserType::all();
        $id_post = Post::all();
        return view('company.create', ['user_types' => $user_types, 'id_post' => $id_post]);
    }

    public function Store(CompanyRequest $request)
    {
        $company = new Company($request->validated());
        $company->save();
        return redirect('company')->with('success', 'Compañia creada exitosamente');
    }

    public function Edit(Company $company)
    {
        $user_types = UserType::all();
        $id_post = Post::all();
    
        return view('company.edit', [
            'user_types' => $user_types,
            'id_post' => $id_post,
        ])->with('company', $company);
    }
    
    public function Update(CompanyRequest $request, Company $company)
    {
        $company->update($request->all());
        return route('company.index');
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