@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Occupations/createOccupation.css') }}">
<section class="create">
    <h1 class="title">Create Your <span>Occupation</span></h1>
    <form action="{{ route('update.occupation', $occupation->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Update the name of the occupation :</label>
        <input value="{{ $occupation-> occupation_name }}" name="occupation_name" type="text" required></input><br><br>

        <label>Update the description of the occupation:</label><br>
        <input value="{{ $occupation-> occupation_description }}"  name="occupation_description" type="text" required></input><br><br>

        <label>Update the post ID:</label>
        <input value="{{ $occupation-> id_post }}" type="number" name="id_post" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>