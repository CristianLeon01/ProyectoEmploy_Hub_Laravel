@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('/css/NotRegister/notRegister.css') }}">
    <div class="sectionNum1">
        <h1 class="titleNotRegister">Welcome to <span class="spanTitle">EmployHub</span></h1>
        <div class="description">
            <p class="parrafo-section1">Bienvenido a nuestra agencia de empleo, donde conectamos talento con oportunidades.
                ¡Encuentra el trabajo perfecto para ti y da el siguiente paso en tu carrera hoy mismo!</p>
        </div>
        <img src="{{ asset('img/flecha.png') }}" class="menu-icono" alt="" onclick="redirigirASecion('sectionNum2')">
    </div>
    <br>
    <div id="sectionNum2" class="sectionNum2">
        <br><br><br><br>
        <div class="sub1-section2">
            <div class="tres-objetivos">
                <div class="casilla1">
                    <h1 class="text-oportunidad">Oportunidades</h1>
                    <p class="parrafo-tarjetas"> En EmployHub, creemos en desbloquear el potencial de cada individuo. Ofrecemos una amplia gama de oportunidades laborales que se adaptan a diversas habilidades, experiencias y ambiciones profesionales. Ya sea que estés buscando tu primer empleo, un cambio de carrera o un ascenso, estamos aquí para conectarlo con las oportunidades que te ayudarán a alcanzar tus metas.</p>
                    <img class="img-tarjeta" src="{{ asset('img/estrella.png') }}" class="menu-icono" alt="">
                </div>
                <div class="casilla2">
                    <h1 class="text-eficacia">Eficacia</h1>
                    <p class="parrafo-tarjetas">En EmployHub, la eficacia es nuestra piedra angular. Nos esforzamos por proporcionar resultados tangibles y soluciones efectivas para cada uno de nuestros clientes y candidatos. Desde la selección cuidadosa de talentos hasta el seguimiento postcolocación, nos aseguramos de que cada paso del proceso de empleo sea eficiente y orientado a resultados.</p>
                    <img class="img-tarjeta" src="{{ asset('img/eficaz.png') }}" class="menu-icono" alt="">
                </div>
                <div class="casilla3">
                    <h1 class="text-variedad-laboral">Variedad Laboral</h1>
                    <p class="parrafo-tarjetas">En EmployHub, comprendemos que la satisfacción laboral va más allá del salario y el título. Por eso, nos esforzamos por ofrecer una variedad de opciones laborales que se ajusten a diferentes estilos de vida, intereses y necesidades profesionales. Desde roles a tiempo completo hasta oportunidades de trabajo flexible y proyectos freelance, te ayudaremos a encontrar la combinación perfecta que se adapte a tus preferencias y objetivos.</p>
                    <img class="img-tarjeta" src="{{ asset('img/laboral.png') }}" class="menu-icono" alt="">
                </div>
                <script>
                    function redirigirASecion(idSeccion) {
                      var seccion = document.getElementById(idSeccion);
                      if (seccion) {
                        seccion.scrollIntoView({ behavior: 'smooth' }); // Desplaza la vista a la sección
                      }
                    }
                    </script>
            </div>
        </div>
    </div>
@endsection
