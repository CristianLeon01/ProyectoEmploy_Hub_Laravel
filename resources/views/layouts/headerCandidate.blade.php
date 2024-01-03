@extends('layouts.app')
@section('content')
    <ul class="menu-candidate">
        <li class="contenedor-candidate">
            <a href="#termino">Candidate</a>
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
        <form action="#" method="get" class="search">
            <input type="text" placeholder="Busqueda de empleo" name="src">
            <button type="submit"> <img src = "{{ asset('../img/Search.png')}}" alt = "Busqueda" > </button>
        </form>
</section>
@endsection