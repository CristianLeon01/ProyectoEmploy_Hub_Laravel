@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Abilities/createAbilities.css') }}">

<section class="create">
    <h1 class="titleAbility">Create Your <span>Skill</span></h1>
    <form class="form-skill" action="{{ route('store.skill') }}" method="POST">
        @csrf

        <label>Write the name of your Skill :</label>
        <input  name="skill_name" type="text" required></input><br><br>

        <label>Write the description of the skill:</label><br>
        <input  name="skill_description" type="text" required></input><br><br>

        <label>Write the occupation id:</label>
        <input type="number"  name="id_occupations" required><br><br>

        <label>Write the name of the occupation:</label>
        <input type="text" name="occupation_name" required><br><br>

        <center><button type="submit" class="create-ability-button">Create</button></center>
    </form>
    @endsection
</section>