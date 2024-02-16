<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Welcome/welcome.css') }}">
    <title>Bienvenida a EmployHub</title>
</head>
<body class="background">
    <section class="card">
        <img class="imagen" src="{{ asset('img/Logo_EmplyHub.png') }}" alt="Logo de EmployHub">
        <h2>¡Bienvenid@ a EmployHub!</h2>
        <section class="form-group">
            <p>Estamos emocionados de tenerte a bordo. En EmployHub, nuestra misión es ayudarte a encontrar las oportunidades laborales que se alineen con tus habilidades y metas profesionales. Prepárate para explorar nuevas posibilidades y dar el siguiente paso en tu carrera. ¡Gracias por unirte a nuestra comunidad de búsqueda de empleo!</p>
            <a href="{{ route('login') }}"><button type="submit-btn">Haga clic para continuar</button></a>
        </section>
    </section>
</body>
</html>