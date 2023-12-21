@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Abilities/createAbilities.css') }}">
<a href="{{ route ('skill') }}"> Back</a>

<section class="create">
    <h1 class="title">Create Your <span>Skill</span></h1>
    <form action="{{ route('store.skill') }}" method="POST">
        @csrf

        <label>Write the name of your Skill :</label>
        <textarea  name="skill_name" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Write the description of the skill:</label><br>
        <textarea  name="skill_description" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Write the occupation id:</label>
        <input type="number"  name="id_occupations" required><br><br>

        <label>Write the name of the occupation:</label>
        <input type="text" name="occupation_name" required><br><br>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>