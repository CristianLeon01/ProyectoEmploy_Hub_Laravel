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
        <h2>Welcome to EmployHub!</h2>
        <section class="form-group">
            <p>We are excited to have you on board. At EmployHub, our mission is to help you find job opportunities that align with your skills and career goals. Get ready to explore new possibilities and take the next step in your career. Thank you for joining our job search community!</p>
            <a href="{{ route('login') }}"><button type="submit-btn">Click to continue</button></a>
        </section>
    </section>
</body>
</html>