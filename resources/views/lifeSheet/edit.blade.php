@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Life_Sheets/createLifeSheet.css') }}">
<section class="box">
    <h1>Update Your LifeSheet</h1>
    <form method="post" action="{{ route('update.lifeSheet', $lifeSheet ->id) }}">
        @method('PUT')
        @csrf

        <label for="nombre">Update your Personal Description:</label>
        <input type="text" name="personal_description" value="{{ $lifeSheet-> personal_description }}" required>

        <label for="experiencia">Update your Languages:</label>
        <textarea name="languages" value="{{ $lifeSheet-> languages }}" required></textarea>

        <label for="educacion">Update your Experience:</label>
        <textarea name="experience" value="{{ $lifeSheet-> experience }}" required></textarea>

        <label for="educacion">Update your Education:</label>
        <textarea name="education" value="{{ $lifeSheet-> education }}" required></textarea>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
</section>
@endsection