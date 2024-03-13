@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Occupations/editOccupations.css') }}">
<section class="create">
    <h1 class="title-occupation">Update Your <span>Occupation</span></h1>
    <form class="form-occupation" action="{{ route('update.occupation', $occupation->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Update the name of the occupation :</label>
        <input value="{{ $occupation-> occupation_name }}" name="occupation_name" type="text" required></input><br><br>

        <label>Update the description of the occupation:</label><br>
        <input value="{{ $occupation-> occupation_description }}"  name="occupation_description" type="text" required></input><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>