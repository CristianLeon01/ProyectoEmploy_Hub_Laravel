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
            <h1>¡Welcome to EmployHub, {{ $user->username}}! </h1>
        </header>
        <section>
            <p>Thank you for joining EmployHub, your public employment agency. We're here to help you find job opportunities that fit your skills and career goals.</p>
            <p>If you have any questions or need assistance, do not hesitate to contact us at employhub27@gmail.com, do not hesitate to contact our team. We wish you much success in your job search!</p>
        </section>
        <footer>
            <p>Sincerely, EmployHub Team</p>
        </footer>
    </div>
</body>
</html>
