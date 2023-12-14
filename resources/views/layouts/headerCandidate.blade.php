@extends('layouts.app')
@section('content')
    <ul class="menu-candidate">
        <li class="contenedor-candidate">
            <a href="#termino">Candidate</a>
            <ul class="sub-Menu-candidate">
                <li><a href="">My account</a></li>
                <li><a href="">My resume</a></li>
                <li><a href="">My Process status</a></li>
                <li><a href="{{ route('offer')}}">Offert</a></li>
                <li><a href="">Setting</a></li>
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