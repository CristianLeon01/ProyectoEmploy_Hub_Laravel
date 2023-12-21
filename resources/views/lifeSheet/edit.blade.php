@extends('layouts.app')
@section('content')
<a href="{{ route ('lifeSheet') }}"> Back</a>

<link rel="stylesheet" href="{{ asset('/css/Life_Sheets/createLifeSheet.css') }}">
<section class="box">
    <h1>Crear Hoja de Vida</h1>
    <form method="post" action="{{ route('update.lifeSheet', $lifeSheet ->id) }}">
        @method('PUT')
        @csrf

        <label for="nombre">Personal Description:</label>
        <input type="text" name="personal_description" value="{{ $lifeSheet-> personal_description }}" required>

        <label for="experiencia">Languages:</label>
        <textarea name="languages" value="{{ $lifeSheet-> languages }}" required></textarea>

        <label for="educacion">Experience:</label>
        <textarea name="experience" value="{{ $lifeSheet-> experience }}" required></textarea>

        <label for="educacion">Education:</label>
        <textarea name="education" value="{{ $lifeSheet-> education }}" required></textarea>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
</section>
@endsection