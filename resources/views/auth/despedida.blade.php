<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Farewall/farewall.css') }}">
    <title>Despedida a EmployHub</title>
</head>
<body class="background">
    <section class="card">
        <img class="imagen" src="{{ asset('img/Logo_EmplyHub.png') }}" alt="Logo de EmployHub">
        <h2>See you later!</h2>
        <section class="form-group">
            <p>Thanks for using our app. Come back soon!</p>
            <a href="{{ route('login') }}"><button type="submit-btn">Click to log in</button></a>
        </section>
    </section>
</body>
</html>