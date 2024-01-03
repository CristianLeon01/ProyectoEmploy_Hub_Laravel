<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/Welcome/welcome.css') }}">
    <title>Bienvenido a EmployHub</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>¡Bienvenido a EmployHub, {{ $user->username}}! </h1>
        </header>
        <section>
            <p>Gracias por unirte a EmployHub, tu agencia pública de empleo. Estamos aquí para ayudarte a encontrar oportunidades laborales que se adapten a tus habilidades y metas profesionales.</p>
            <p>Si tienes alguna pregunta o necesitas asistencia no dudes en contactarte al siguiente correo employhub27@gmail.com, no dudes en ponerte en contacto con nuestro equipo. ¡Te deseamos mucho éxito en tu búsqueda de empleo!</p>
        </section>
        <footer>
            <p>Atentamente, el equipo de EmployHub</p>
        </footer>
    </div>
</body>
</html>
