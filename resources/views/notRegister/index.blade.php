@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('/css/NotRegister/notRegister.css') }}">
    <div class="sectionNum1">
        <h1 class="titleNotRegister">Welcome to <span class="spanTitle">EmployHub</span></h1>
        <div class="description">
            <p class="parrafo-section1">Bienvenido a nuestra agencia de empleo, donde conectamos talento con oportunidades.
                ¡Encuentra el trabajo perfecto para ti y da el siguiente paso en tu carrera hoy mismo!</p>
        </div>
        <img src="{{ asset('img/flecha.png') }}" class="menu-icono" alt="">
    </div>
    <br>
    <div class="sectionNum2">
        <br><br><br><br>
        <div class="sub1-section2">
            <div class="tres-objetivos">
                <div class="casilla1"></div>

                <div class="casilla2"></div>
                <div class="casilla3"></div>
            </div>
        </div>
    </div>
@endsection
