@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('../css/About_Us/aboutUS.css') }}">
<section class="sobre_Nosotros">
    <section class="titulo">
        <h1>Get to know <span> us a little more...</span></h1>
    </section>
        <section class="contenedor-tarjetas">
            <section class="tarjeta1">
                <section class="Imagenes-tarjetas">
                    <img src="../img/Logo_EmplyHub.png" alt="Imagen 1">
                </section>
                <section class="contenido">
                    <h3>About <span> Us?</span></h3>
                    <p>Greetings to everyone, we wish welcome to all those who are viewing this page, we are a group of 3 teenagers with a project called EmployHub (Employment Center), this was created in the year 2023, starting from the simplest Until we reached this moment, as a project group we have based ourselves on the responsibility, support and respect that we have among ourselves. As a project group we thank SENA for trusting us and for taking this beautiful project by the hand.</p>
                </section>
            </section>
            <section class="tarjeta2">
                <section class="Imagenes-tarjetas">
                    <img src="../img/objetivo.webp" alt="Imagen 1">
                </section>
                <section class="contenido">
                    <h3>Objective</h3>
                    <p>Develop software with the ability to simplify the process required for personnel selection, through different programming languages ​​(HTML5, CSS, PYTHON) and a database manager or engine.</p>
                </section>
            </section>
            <section class="tarjeta3">
                <section class="Imagenes-tarjetas">
                    <img src="../img/objetivoEspecifico.avif" alt="Imagen 1">
                </section>
                <section class="contenido">
                    <h3>Specific <span>  Goal</span></h3>
                    <p>-Analyze and filter the data required when requesting a vacancy, for the execution of the specific objectives the following activities were proposed, developing class diagrams and identifying fundamental actors and actions of the system.</p>
                </section>
            </section>
        </section>
</section>
</body>
</html>
@endsection