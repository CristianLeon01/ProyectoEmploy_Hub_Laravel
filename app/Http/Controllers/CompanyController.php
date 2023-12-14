<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\UserType;


class CompanyController extends Controller
{
    public function Company (){


        $companies = Company::all();
        return view("company.index", ["companies"=>$companies]);
    }
    
    public function Create(){

        $user_types = UserType::all();
        return view('company.create',['user_types'=> $user_types]);
    }

    public function Store(Request $request){;

        $company = new Company();
        $company->company_name = $request->input('company_name');
        $company->legal_representative = $request->input('legal_representative');
        $company->company_type = $request->input('company_type');
        $company->NIT = $request->input('NIT');
        $company->number_workers= $request -> input('number_workers');
        $company->legal_representative_email= $request->input('legal_representative_email');
        $company->nature = $request-> input ('nature');        
        $company->email = $request->input('email');
        $company->phone = $request->input('phone');
        $company->alternate_phone=$request->input ('alternate_phone');
        $company->human_resources_manager=$request->input ('human_resources_manager');
        $company->phone_2=$request->input ('phone_2');
        $company->alternate_phone_2= $request->input('alternate_phone_2');
        $company->email_manager=$request->input ('email_manager');    
        $company->id_post=$request->input ('id_post');     
        $company->id_user_types=$request->input ('id_user_types');       
        $company->save();

        return redirect()->route('company');

    }

    public function Edit (Company $company){
        return view('company.edit', compact('company'));
    }


    public function Update(Request $request, Company $company){
        
        $company->update($request->all()); 
        return redirect()->route('company');
    }

    public function Show(Company $company){
        return view ('company.show', compact('company'));
    }

    public function Destroy (Request $request, Company $company){ 
        $company->delete();
        return redirect()->route('company');
    }

    public function header()
    {
        return view('layouts.headerCompany');
    }
}
