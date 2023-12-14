<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="{{ asset('/css/Home/home.css') }}">
</head>
<body>
    <header>
        <section class="interior">
            <a href="../HTML/index.html" class="logo"><img src="../Img/Logo_EmplyHub.png" alt="Emplay_Hub"></a>
            <input type="checkbox" id="icon-menu"/>
            <label for="icon-menu">
                <img src="../Img/menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navegacion">
                <ul class="menu">
                    <li><a class="activa" href="../HTML/index.html">Inicio</a></li>
                    <li><a href="../HTML/ofertas.html">Ofertas</a></li>
                    <li>
                        <a href="#termino">Empresa</a>
                        <ul class="sub-Menu">
                            <li><a href="../HTML/crearEmpresa.html">Crear Empresa</a></li>
                            <li><a href="../HTML/crearOferta.html">Crear Oferta</a></li>
                            <li><a href="../HTML/vacantesPostuladas.html">Vacantes postuladas</a></li>
                            <li><a href="../HTML/configuracionEmpresa.html">Configuracion</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#termino">Usuario</a>
                        <ul class="sub-Menu">
                            <li><a href="../HTML/Mi-Cuenta.html">Mi cuenta</a></li>
                            <li><a href="../HTML/mi_hoja_de_vida.html">Mi hoja de Vida</a></li>
                            <li><a href="../HTML/mi_estado.html">Mi estado de Proceso</a></li>
                            <li><a href="../HTML/configuracionUsuario.html">Configuracion</a></li>
                        </ul>
                    </li>
                    <li><a class="sobreNosotros" href="../HTML/sobreNosotros.html">Sobre Nosotros</a></li>
                    <li><a class="terminos" href="../HTML/terminosCondiciones.html">Terminos y Condiciones</a></li>            
                </ul>
            </nav>
            <ul class = "Login">
                <li><a href="../HTML/signup.html">Sign Up</a></li>
                <li><a href="../HTML/login.html">Log in</a></li>
            </ul>
        </section>
    </header>
    <section class="Busqueda">
        <h1>Centro de <span>Empleo</span></h1>
            <form action="#" method="get" class="search">
                <input type="text" placeholder="Busqueda de empleo" name="src">
                <button type="submit"> <img src = "../Img/Search.png" alt = "Busqueda" > </button>
            </form>
    </section>

    <footer>
        <section class="redes-sociales">
            <a href="https://www.facebook.com/dannamilena.jimenezcastro"  target="_blank" class="icono-redesSociales"></a>
            <a href="https://www.instagram.com/jimenezdanna638/"  target="_blank" class="icono-redesSociales"></a>
            <a href="https://github.com/CristianLeon01/ProyectoRH-3erTri"  target="_blank" class="icono-redesSociales"></a>
            <a href="https://mail.google.com/mail/u/3/#all"  target="_blank"  target="_blank" class="icono-redesSociales"></a>
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