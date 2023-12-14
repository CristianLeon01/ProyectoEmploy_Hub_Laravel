@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Occupations/createOccupation.css') }}">
<a href="{{ route ('occupation') }}"> Back</a>

<section class="create">
    <h1 class="title">Create Your <span>Occupation</span></h1>
    <form action="{{ route('update.occupation', $occupation->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Write the name of the occupation :</label>
        <textarea  value="{{ $occupation-> occupation_name }}" name="occupation_name" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Write the description of the occupation:</label><br>
        <textarea   value="{{ $occupation-> occupation_description }}"  name="occupation_description" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Enter the post ID:</label>
        <input value="{{ $occupation-> id_post }}" type="number" name="id_post" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>