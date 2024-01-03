@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/My_Application/my_application.css') }}">

<h1>Mis postulaciones</h1>

@foreach ($offers as $offer)
    <section class="contenedor">
        <h2>{{ $offer['description_vacant'] }}</h2>
        <section class="botones">
            <button class="botonHorizontal">Postulada</button>
            <button class="botonHorizontal">CV Vista</button>
            <button class="botonHorizontal">En proceso</button>
            <button class="botonHorizontal">Finalizada</button>
        </section>
        <section class="boton1">
            <button class="botonUnico">{{ $offer['number_vacancies_applied'] }} vacantes postuladas</button>
        </section>
    </section>
@endforeach