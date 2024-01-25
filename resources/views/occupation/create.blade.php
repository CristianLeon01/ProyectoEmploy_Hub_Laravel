@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Occupations/createOccupation.css') }}">

<section class="create">
    <h1 class="title">Create Your <span>Occupation</span></h1>
    <form class="form-occupation" action="{{ route('store.occupation') }}" method="POST">
        @csrf

        <label>Write the name of the occupation :</label>
        <textarea  name="occupation_name" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Write the description of the occupation:</label><br>
        <textarea  name="occupation_description" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Enter the post ID:</label>
        <input type="number"  name="id_post" required><br><br>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>