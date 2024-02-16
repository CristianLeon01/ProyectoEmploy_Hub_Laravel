@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Life_Sheets/createLifeSheet.css') }}">
<section class="create">
    <h1 class="title">Create Your Life<span> Sheets </span></h1>
    <form class="form-life" method="post" action="{{ route('store.lifeSheet') }}">
        @csrf

        <label for="nombre">Personal Description:</label>
        <input type="text" name="personal_description"  required>

        <label for="experiencia">Languages:</label>
        <textarea name="languages"  required></textarea>

        <label for="educacion">Experience:</label>
        <textarea name="experience" required></textarea>

        <label for="educacion">Education:</label>
        <textarea name="education" required></textarea>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
</section>
@endsection
