<?php

namespace App\Http\Controllers;

use App\Models\Ability;
use Illuminate\Http\Request;
use App\Http\Requests\AbilityRequest;

class AbilityController extends Controller
{
    public function Ability()
    {
        $skills = Ability::all();
        return view("skill.index", compact("skills"));
    }

    public function Create()
    {
        return view('skill.create');
    }

    public function Store(AbilityRequest $request)
    {
        $ability = new Ability($request->validated());
        $ability->save();
        return redirect('skill')->with('success', 'Habilidad creada exitosamente');
    }

    public function Edit(Ability $skill)
    {
        return view('skill.edit', compact('skill'));
    }

    public function Update(AbilityRequest $request, Ability $skill)
    {
        $skill->update($request->validated());
        return redirect()->route('skill');
    }

    public function Show(Ability $skill)
    {
        return view('skill.show', compact('skill'));
    }

    public function Destroy(Request $request, Ability $skill)
    {
        $skill->delete();
        return redirect()->route('skill');
    }
}