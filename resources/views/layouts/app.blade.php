<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
</head>

<body>
    <header>
        <section class="interior">
            <a href="" class="logo"><img src="{{ asset('img/Logo_EmplyHub.png') }}" alt="Emplay_Hub"></a>
            <input type="checkbox" id="icon-menu" />
            <label for="icon-menu">
                <img src="{{ asset('img/menu.png') }}" class="menu-icono" alt="">
            </label>
            <nav class="navegacion">
                <ul class="menu">
                    <li><a class="activa" href="{{ route('layouts') }}">Home</a></li>
                    <li><a class="sobreNosotros" href="{{ route('aboutUs') }}">About Us</a></li>
                    <li><a class="terminos" href="{{ route('termsConditions') }}">Terms and Conditions</a></li>
                </ul>
            </nav>

            @auth
        <div id="barra-superior">
            <p class="mensaje-bienvenida">Bienvenid@ {{ auth()->user()->username }}</p>
            <ul class="menu-usuario">
                @if (Auth::user()->id_user_types == 1)
                <ul class="menu-admin">
                    <li class="contenedor-admin">
                        <a class="text-admin" href="#">Admin</a>
                        <ul class="sub-Menu-admin">
                            <li><a href="{{ route('create.instructor') }}">Register Instructors</a></li>
                            <li><a href="{{ route('manageUser') }}">Manage Users</a></li>
                            <li><a href="{{ route('instructor') }}">Delete instructor Role</a></li>
                        </ul>
                    </li>    
                </ul>
                @endif
                @if (Auth::user()->id_user_types == 2)
                <ul class="menu-selector">
                    <li class="contenedor-selector">
                        <a href="#">Selector</a>
                        <ul class="sub-Menu-selector">
                            <li><a href="">Consult Selection Process</a></li>
                            <li><a href="">Consult list of selected</a></li>
                            <li><a href="">Quote candidates</a></li>
                            <li><a href="">Record result of the selection process</a></li>
                            <li><a href="">Change Status</a></li>
                        </ul>
                    </li>
                </ul>
                @endif
                @if (Auth::user()->id_user_types == 3)
                <ul class="menu-recruiter">
                    <li class="contenedor-recruiter">
                        <a class="text-recruiter" href="#">Recruiter</a>
                        <ul class="sub-Menu-recruiter">
                            <li><a href="{{ route('create.company')}}">Create Company</a></li>
                            <li><a href="{{ route('create.occupation')}}">Create Occupation</a></li>
                            <li><a href="{{ route('create.post')}}">Create Post</a></li>
                            <li><a href="{{ route('create.weighing')}}">Create Weighing</a></li>
                            <li><a href="#">Register Functions Manual</a></li> 
                            <li><a href="#">Register The Requisition of a position</a></li>
                            <li><a href="#">Post Vacancy</a></li>
                        </ul>
                    </li>
                </ul>
                @endif
                @if (Auth::user()->id_user_types == 4)
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
                @endif
                @if (Auth::user()->id_user_types == 5)
                <ul class="menu-company">
                    <li class="contenedor-company">
                        <a href="#">Company</a>
                        <ul class="sub-Menu-company">
                            <li><a href="{{ route('create.offer')}}">Create Offer</a></li>
                            <li><a href="#">Applied Vacancies</a></li>
                            <li><a href="#">Setting</a></li>
                        </ul>
                    </li>
                </ul>
                @endif
            </ul>
            <form class="form-logout" action="{{ route('logout') }}" method="POST">
                @csrf
                <button>Cerrar sesión</button>
            </form>
        </div>
        @else
        <ul class="login">
            <li><a href="{{ route('register') }}">Sign in</a></li>
            <li><a href="{{ route('login') }}">Log in</a></li>
        </ul>
        @endauth
    </section>
</header>

    

    <div class="imagen-fondo"></div>

    <br>
    @yield('content')

    <footer>
        <section class="redes-sociales">
            <a href="https://www.facebook.com/dannamilena.jimenezcastro" target="_blank" class="icono-redesSociales"></a>
            <a href="https://www.instagram.com/jimenezdanna638/" target="_blank" class="icono-redesSociales"></a>
            <a href="https://github.com/CristianLeon01/ProyectoRH-3erTri" target="_blank" class="icono-redesSociales"></a>
            <a href="https://mail.google.com/mail/u/3/#all" target="_blank" class="icono-redesSociales"></a>
        </section>
        <ul class="menu-contenedor">
            <li class="menu-item">Cristian León</li>
            <li class="menu-item">Diego Carranza</li>
            <li class="menu-item">Danna Jimenez</li>
        </ul>
        <span class="copyright"> &copy; 2023-2024, ADSO </span>
    </footer>
</body>

</html>