@extends('layouts.app')
@section('content')
<link rel="stylesheet"  href="{{ asset('/css/Offerts/createOffert.css') }}">
    <section class="create">
        <h1 class="title-offert">Cree Su <span>Oferta</span></h1>
        <form class="form-offert" action="{{ route('store.offer') }}" method="POST">
            @csrf
            <label for="titulo">Offer Title:</label>
            <input type="text" id="titulo" name="name_vacant" required><br><br>
    
            <label for="descripcion">Description:</label><br>
            <textarea id="descripcion" name="description_vacant" rows="4" cols="50" required></textarea><br><br>
    
            <label for="empresa">Company:</label>
            <input type="text" id="empresa" name="name_company" required><br><br>
    
            <label for="ubicacion">Address:</label>
            <input type="text" id="ubicacion" name="address"><br><br>
    
            <label for="salario">Salary:</label>
            <input type="number" id="salario" name="salary"><br><br>
    
            <label for="fecha_publicacion">Publication date:</label>
            <input type="date" id="fecha_publicacion" name="start_date"><br><br><br>

            <label for="fecha_limite">Deadline:</label>
            <input type="date" id="fecha_limite" name="end_date"><br><br><br>

            <label for="experiencia">Months of Experience Required:</label>
            <input type="number" id="experiencia" name="months_experience" min="0" max="120" required>
            
            <label for="exampleInputEmail" class="form-label">Contract Type</label>
            <select class="form-select" name="id_contract_types" id="">
                @foreach ($contract_type as $contract_types)
                <option value="{{$contract_types->id}}">{{$contract_types->contract_name}}</option>    
                @endforeach
            </select>
    
            <label for="requisitos">Requirements:</label>
            <textarea id="requisitos" name="requirements" rows="4" cols="50" required></textarea><br><br>

            <center><button type="submit" class="create-application-button">Crear Oferta</button></center>
        </form>
    </section>
@endsection