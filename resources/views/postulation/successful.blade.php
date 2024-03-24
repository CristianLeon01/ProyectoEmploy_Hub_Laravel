<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Welcome/welcome.css') }}">
    <title>Postulación Exitosa - EmployHub</title>
</head>
<body class="background">
    <section class="card">
        <img class="imagen" src="{{ asset('img/Logo_EmplyHub.png') }}" alt="Logo de EmployHub">
        <h2>Successful application!</h2>
        <section class="form-group">
            <p>Your application has been successful. Thank you for joining EmployHub! We are excited to have you in our job search community. Get ready to explore new career opportunities that align with your skills and career goals. Good luck in your job search!</p>
            <a href="{{ route('my_application.mostrar', ['offer_id' => $offer->id]) }}">
                <button type="submit-btn">Continue</button>
            </a>                   
        </section>
    </section>
</body>
</html>