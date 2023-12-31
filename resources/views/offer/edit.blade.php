@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('/css/Offerts/createOffert.css') }}">
<section class="crearOferta">
        <h1 class="tituloOferta">Cree Su <span>Oferta</span></h1>
        <form action="{{ route('update.offer', $offer->id) }}" method="POST">>
            @method('PUT')
            @csrf
            <label for="titulo">Offer Title:</label>
            <input type="text" id="titulo" name="name_vacant" required value="{{ $offer-> name_vacant }}"><br><br>
    
            <label for="descripcion">Description:</label><br>
            <textarea id="descripcion" name="description_vacant" rows="4" cols="50" required value="{{ $offer-> description_vacant }}"></textarea><br><br>
    
            <label for="empresa">Company:</label>
            <input type="text" id="empresa" name="name_company" required value="{{ $offer-> name_company }}"><br><br>
    
            <label for="ubicacion">Address:</label>
            <input type="text" id="ubicacion" name="address" value="{{ $offer-> address }}"><br><br>
    
            <label for="salario">Salary:</label>
            <input type="number" id="salario" name="salary" value="{{ $offer-> salary }}"><br><br>
    
            <label for="fecha_publicacion">Publication date:</label>
            <input type="date" id="fecha_publicacion" name="start_date" value="{{ $offer-> start_date }}"><br><br><br>

            <label for="fecha_limite">Deadline:</label>
            <input type="date" id="fecha_limite" name="end_date" value="{{ $offer-> end_date }}"><br><br><br>

            <label for="experiencia">Months of Experience Required:</label>
            <input type="number" id="experiencia" name="months_experience" min="0" max="120" required value="{{ $offer-> months_experience }}">
    
            <label for="requisitos">Requirements:</label>
            <textarea id="requisitos" name="requirements" rows="4" cols="50" required value="{{ $offer-> requirements }}"></textarea><br><br>
    
            <center><button type="submit" class="crear-oferta-button" value="Update">Update</button></center>
        </form>
    </section>
@endsection