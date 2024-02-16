@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Abilities/createAbilities.css') }}">
<section class="create">
    <h1 class="title">Create Your <span>Skill</span></h1>
    <form action="{{ route('update.skill', $skill->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Update the name of your Skill :</label>
        <textarea  value="{{ $skill-> skill_name }}" name="skill_name" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Update the description of the skill:</label><br>
        <textarea   value="{{ $skill-> skill_description }}"  name="skill_description" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Update the occupation id:</label>
        <input value="{{ $skill-> id_occupations }}" type="number" name="id_occupations" required><br><br>

        <label>Update the name of the occupation:</label>
        <input  value="{{ $skill-> occupation_name }}" type="text" name="occupation_name" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>