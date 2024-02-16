<?php

namespace App\Http\Controllers;

use App\Models\Vacant;
use Illuminate\Http\Request;

class VacantController extends Controller
{
    public function index()
    {
        $vacancies = Vacant::all();
        return view('vacant.index', compact('vacancies'));
    }

    public function create()
    {
        return view('vacant.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        ]);

        Vacant::create($request->all());

        return redirect()->route('vacancies.index')
            ->with('success', 'Vacant created successfully');
    }

    public function show(Vacant $vacant)
    {
        return view('vacant.show', compact('vacanct'));
    }

    public function edit(Vacant $vacant)
    {
        return view('vacant.edit', compact('vacant'));
    }

    public function update(Request $request, Vacant $vacanct)
    {
        $request->validate([
        ]);

        $vacanct->update($request->all());

        return redirect()->route('vacant.index')
            ->with('success', 'Vacant updated successfully');
    }

    public function destroy(Vacant $vacant)
    {
        $vacant->delete();

        return redirect()->route('vacant.index')
            ->with('success', 'Vacant deleted successfully');
    }
}
