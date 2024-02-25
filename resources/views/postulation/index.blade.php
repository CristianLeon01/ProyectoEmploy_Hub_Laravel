@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/Postulation/postulation.css') }}">
<div class="super-contenedor">    
    <div class="contenedor-informacion">
        <div class="sub-cont-info">
            <h1 class="titulo-oferta"></h1>
            <p class="descripcion-oferta"></p>
            <ul class="detalles-oferta">
                <li>Salario:</li>
                <li>Meses de experiencia:</li>
                <li>Tipo de contrato:</li>
                <li>Localidad: </li>
                <!-- Agrega más detalles de la oferta según sea necesario -->
            </ul>
        </div>
    </div>
    <div class="segundo-contenedor">
        <div class="sub-cont-segundo">
            <h1 class="titulo-info-empresa">MUEBLES A.C</h1>
            <p class="parrafo-empresa">
                Bienvenido a Muebles Elegancia S.A., donde transformamos espacios en hogares y oficinas a través de nuestro compromiso con la excelencia y la innovación. En nuestra búsqueda de redefinir la experiencia de vivir y trabajar, nos esforzamos por ofrecer mobiliario de alta calidad y diseño vanguardista. En Muebles Elegancia, nuestra misión es inspirar estilos de vida modernos mediante soluciones que fusionan funcionalidad y estética. Nos enorgullece ser líderes en la industria del mobiliario, destacando por nuestra dedicación a la calidad superior, la innovación continua y la sostenibilidad ambiental. Nuestra amplia gama de productos, desde elegantes conjuntos de sala de estar hasta soluciones de oficina ergonómicas, refleja nuestra diversidad y compromiso con la satisfacción del cliente. Más allá de ofrecer muebles excepcionales, nos comprometemos con la responsabilidad social, colaborando con organizaciones benéficas y contribuyendo al bienestar de las comunidades. En Muebles Elegancia, cada pieza cuenta una historia de artesanía meticulosa, fusionando tecnología de punta con prácticas ecológicas. Somos más que una empresa de muebles; somos creadores de espacios que inspiran y mejoran la calidad de vida. ¡Descubra la elegancia en cada rincón de su hogar y oficina con Muebles Elegancia S.A.!</p>
        </div>
    </div>
    <button class="btn-finalizar">Finalizar Postulación</button>
</div>
@endsection