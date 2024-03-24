@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/My_Application/my_application.css') }}">

<h1 class="title-my-application">My applications</h1>
<section class="contenedor">
    <h2><span class="span-title">Name vacant:</span> <span class="span-info">{{ $offer->name_vacant }}</span></h2>
    <p><span class="span-title">Description Offer:</span> <span class="span-info">{{ $offer->description_vacant }}</span></p>
    <section class="botones">
        <button class="botonHorizontal">Postulada</button>
        <button class="botonHorizontal">CV Vista</button>
        <button class="botonHorizontal">En proceso</button>
        <button class="botonHorizontal">Finalizada</button>
    </section>
    <section class="boton1">
        <button class="botonUnico">{{ $offer->postulations->count() }} Nominated Candidates</button>
    </section>
</section>
@endsection