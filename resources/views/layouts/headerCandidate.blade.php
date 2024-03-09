@extends('layouts.app')
@section('content')
    <ul class="menu-candidate">
        <li class="contenedor-candidate">
            <ul class="sub-Menu-candidate">
                <li><a href="">Check Vacancy</a></li>
                <li><a href="{{ route('create.lifeSheet')}}">Register resume</a></li>
                <li><a href="{{ route('offer') }}">Apply for a Vacancy</a></li>
                <li><a href="">Consult Process Status</a></li>
            </ul>
        </li>
    </ul>


    <section class="Busqueda">
        <h1>Centro de <span>Empleo</span></h1>
        <form action="{{ route('search.offer') }}" method="GET" class="search">
            <input type="text" placeholder="Búsqueda de empleo" name="q">
            <button type="submit"> <img src="{{ asset('../img/Search.png')}}" alt="Búsqueda"> </button>
        </form> 
    </section>
@endsection