@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('/css/NotRegister/notRegister.css') }}">
    <div class="sectionNum1">
        <h1 class="titleNotRegister">Welcome to <span class="spanTitle">EmployHub</span></h1>
        <div class="description">
            <p class="parrafo-section1">Welcome to our employment agency, where we connect talent with opportunities.
                Find the perfect job for you and take the next step in your career today!</p>
        </div>
        <img src="{{ asset('img/flecha.png') }}" class="menu-icono" alt="" onclick="redirigirASecion('sectionNum2')">
    </div>
    <br>
    <div id="sectionNum2" class="sectionNum2">
        <br><br><br><br>
        <div class="sub1-section2">
            <div class="tres-objetivos">
                <div class="casilla1">
                    <h1 class="text-oportunidad">Opportunities</h1>
                    <p class="parrafo-tarjetas"> At EmployHub, we believe in unlocking the potential of every individual. We offer a wide range of career opportunities to suit diverse skills, experiences and career ambitions. Whether you're looking for your first job, a career change, or a promotion, we're here to connect you with opportunities that will help you achieve your goals.</p>
                    <img class="img-tarjeta" src="{{ asset('img/estrella.png') }}" class="menu-icono" alt="">
                </div>
                <div class="casilla2">
                    <h1 class="text-eficacia">Effectiveness</h1>
                    <p class="parrafo-tarjetas">At EmployHub, efficiency is our cornerstone. We strive to provide tangible results and effective solutions for each of our clients and candidates. From careful talent selection to post-placement monitoring, we ensure that every step of the employment process is efficient and results-oriented.</p>
                    <img class="img-tarjeta" src="{{ asset('img/eficaz.png') }}" class="menu-icono" alt="">
                </div>
                <div class="casilla3">
                    <h1 class="text-variedad-laboral">Job Variety</h1>
                    <p class="parrafo-tarjetas">At EmployHub, we understand that job satisfaction goes beyond salary and title. That's why we strive to offer a variety of career options to fit different lifestyles, interests, and career needs. From full-time roles to flexible work opportunities and freelance projects, we'll help you find the perfect match to suit your preferences and goals.</p>
                    <img class="img-tarjeta" src="{{ asset('img/laboral.png') }}" class="menu-icono" alt="">
                </div>
                <script>
                    function redirigirASecion(idSeccion) {
                      var seccion = document.getElementById(idSeccion);
                      if (seccion) {
                        seccion.scrollIntoView({ behavior: 'smooth' });
                      }
                    }
                    </script>
            </div>
        </div>
    </div>
@endsection
