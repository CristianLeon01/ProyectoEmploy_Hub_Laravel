@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('../css/About_Us/aboutUS.css') }}">
<section class="sobre_Nosotros">
    <section class="titulo">
        <h1>Conocenos un<span> poco más...</span></h1>
    </section>
        <section class="contenedor-tarjetas">
            <section class="tarjeta1">
                <section class="Imagenes-tarjetas">
                    <img src="../img/Logo_EmplyHub.png" alt="Imagen 1">
                </section>
                <section class="contenido">
                    <h3>¿Quienes<span> Somos?</span></h3>
                    <p>Un saludo a tod@s les deseamos la bienvenida a todos aquellos que esten observando esta pagina, nosotros somos un grupo de 3 adolecentes con un proyecto llamado EmployHub (Centro de Empleo), este fue creado en el año 2023, comenzando desde lo mas simple hasta llegar hasta este momento, como grupo de proyecto nos hemos basado en la responsabilidad, apoyo y respeto que entre nosotros tenemos, como grupo de proyecto agradecemos al SENA por confiar en nosotros y por llevar de la mano este hermoso proyecto.</p>
                </section>
            </section>
            <section class="tarjeta2">
                <section class="Imagenes-tarjetas">
                    <img src="../img/objetivo.webp" alt="Imagen 1">
                </section>
                <section class="contenido">
                    <h3>Objetivo</h3>
                    <p>Desarrollar un software con la capacidad de simplificar el proceso que requiere la selección de personal,por medio de distintos lenguajes de programación (HTML5, CSS, PYTHON) Y un gestor o motor de bases de datos.</p>
                </section>
            </section>
            <section class="tarjeta3">
                <section class="Imagenes-tarjetas">
                    <img src="../img/objetivoEspecifico.avif" alt="Imagen 1">
                </section>
                <section class="contenido">
                    <h3>Objetivo<span>  Especifico</span></h3>
                    <p>-Analizar y filtrar los datos que se requieren al momento de solicitar una vacante, para la ejecución de los objetivos específicos se plantearon las siguientes actividades, desarrollar diagramas de clases e identificando actores y acciones fundamentales del sistema.</p>
                </section>
            </section>
        </section>
</section>
</body>
</html>
@endsection