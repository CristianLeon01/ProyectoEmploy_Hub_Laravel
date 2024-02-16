@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('/css/Offerts/indexOffert.css') }}">
<div class="contenedor-supremo">
    <div class="container1">
        <ul>
            @forelse ($offers as $offer)
                <div class="contenedor">
                    <section class="contenedor-izquierda">
                        <h2>{{ $offer->name_vacant }}</h2>
                        <li class="oferta-item"><a>Salario: {{ $offer->salary }}</a></li>
                        <li class="oferta-item"><a>Meses de experiencia: {{ $offer->months_experience }}</a></li>
                        <li class="oferta-item"><a>Tipo de contrato: {{ $offer->contractType->contract_name }}</a></li>
                        <li class="oferta-item"><a>Localidad: {{ $offer->address }}</a></li>
                        
                        <section class="contenedor-derecha">
                            <li class="oferta-item"><a>Vacantes: {{ $offer->vacantes }}</a></li>
                            <li class="oferta-item"><a>Postulaciones: {{ $offer->postulaciones }}</a></li>
                            <li class="oferta-item"><a>Fecha publicacion: {{ $offer->start_date }}</a></li>
                            <li class="oferta-item"><a>Fecha cierre: {{ $offer->end_date }}</a></li>
                            <section class="boton">
                                <a href="{{ route('postulation') }}"><button class="botonUnico">Postularme</button></a>
                            </section>
                        </section>
                    </section>
                </div>
            @empty
                <p>No data.</p>
            @endforelse
        </ul>
    </div>
    <div class="container2">
        <section class="contenedor1">
            <h3>Resultado de búsqueda</h3>
            <section class="segundo">
                <label for="experiencia" class="label">Experiencia:</label>
                <select id="experiencia" name="experiencia" class="select">
                    <option value="ninguna">Ninguna</option>
                    <option value="sin-experiencia">Sin experiencia</option>
                    <option value="años">0 - 1 años</option>
                    <option value="años">1 - 2 años</option>
                    <option value="años">2 - 3 años</option>
                    <option value="años">Mas de 3 años</option>
                </select><br><br>
                
                <label for="tipo_contrato" class="label">Tipo de Contrato:</label>
                <select id="tipo_contrato" name="tipo_contrato" class="select">
                    <option value="">No aplica</option>
                    <option value="fijo">Fijo</option>
                    <option value="temporal">Temporal</option>
                    <option value="indefinido">Indefinido</option>
                    <option value="obra">Por obra</option>
                    <option value="otra">Otra</option>
                    <option value="prestacion">Prestacion de servicios</option>
                    <option value="nombramiento">Nombramiento temporal</option>
                    <option value="libre">Libre nombramiento y remocion</option>
                </select><br><br>
                
                <label for="tipo_jornada" class="label">Tipo de Jornada:</label>
                <select id="tipo_jornada" name="tipo_jornada" class="select">
                    <option value="">No aplica</option>
                    <option value="completa">Completa</option>
                    <option value="medio">Medio tiempo</option>
                    <option value="otro">Otro</option>
                </select><br><br>
                
                <label for="salario" class="label">Salario:</label>
                <select id="salario" name="salario" class="select">
                    <option value="salario">$ 10.000.001 - $ 12.500.000</option>
                    <option value="salario">$ 12.500.00 - $15.000.000</option>
                    <option value="salario">$ 15.000.001 - $18.000.000</option>
                    <option value="salario">$ 18.000.001 - $20.000.000</option>
                    <option value="salario">Más de - $ 20.000.000</option>
                    <option value="salario">$ 2.204.799 - $ 3.658.699</option>
                    <option value="salario">$ 2.517.479 - 4.214.845</option>
                    <option value="salario">No definido</option>
                </select><br><br>
                
                <label for="fecha_publicacion" class="label">Fecha de publicacion:</label>
                <input type="date" id="fecha_pucblicacion" name="fecha_pucblicacion" class="select"><br><br><br>
        </section>
    </div>
</div>                
@endsection
