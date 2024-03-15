@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/My_Application/my_application.css') }}">

<h1>My applications</h1>

{{-- @foreach ($offers as $offer) --}}
    <section class="contenedor">
        {{-- <h2>{{ $offer->description_vacant }}</h2> --}}
        <section class="botones">
            <button class="botonHorizontal">Postulated</button>
            <button class="botonHorizontal">CV View</button>
            <button class="botonHorizontal">In progress</button>
            <button class="botonHorizontal">Finished</button>
        </section>
        <section class="boton1">
            {{-- <button class="botonUnico">{{ $offer['number_vacancies_applied'] }} Applied vacancies</button> --}}
        </section>
    </section>
{{-- @endforeach --}}

@endsection