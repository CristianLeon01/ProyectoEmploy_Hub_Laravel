@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Abilities/editAbilities.css') }}">
<section class="create">
    <h1 class="titleAbility">Update Your <span>Skill</span></h1>
    <form class="form-skill" action="{{ route('update.skill', $skill->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Update the name of your Skill :</label>
        <input  value="{{ $skill-> skill_name }}" name="skill_name" type="text" required></input><br><br>

        <label>Update the description of the skill:</label><br>
        <input   value="{{ $skill-> skill_description }}"  name="skill_description"  type="text" required></input><br><br>

        <input type="hidden" name="id_occupations" value="{{ $skill->id_occupations }}">

        <input type="hidden" name="occupation_name" value="{{ $skill->occupation_name }}">

        <center><button type="submit" class="create-ability-button" value="Update">Update</button></center>
    </form>
</section>
@endsection