@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Candidates/searchCandidate.css') }}">

    <section class="Busqueda-Oferta">
        <h1 class="titulo-busqueda">Centro de <span>Empleo</span></h1>
        <form action="{{ route('search.offer') }}" method="GET" class="search">
            <input type="text" placeholder="Búsqueda de empleo" name="q">
            <button type="submit"> <img src="{{ asset('../img/Search.png')}}" alt="Búsqueda"> </button>
        </form> 
    </section>
@endsection