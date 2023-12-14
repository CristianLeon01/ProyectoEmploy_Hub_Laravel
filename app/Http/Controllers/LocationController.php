<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function Location (){

        $localities = Location::all();
        return view("location.index", compact("localities$localities"));
    }
    
    public function Create(){
        return view('location.create');
    }

    public function Store(Request $request){

        Location::create($request->all());
        return redirect()->route('location');
    }

    public function Edit (Location $location){
        return view('location.edit', compact('location'));
    }


    public function Update(Request $request, Location $location){
        
        $location->update($request->all()); 
        return redirect()->route('location');
    }

    public function Show(Location $location){
        return view ('location.show', compact('location'));
    }

    public function Destroy (Request $request, Location $location){ 
        $location->delete();
        return redirect()->route('location');
    }
}
