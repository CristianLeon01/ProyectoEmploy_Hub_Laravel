@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Functionns/createFuntion.css') }}">
<a href="{{ route ('funtion') }}"> Back</a>

<section class="create">
    <h1 class="title">Create Your <span>Funtion</span></h1>
    <form action="{{ route('update.funtion', $funtion->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Write the description of the function :</label>
        <textarea  value="{{ $funtion-> function_description }}" name="function_description" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Enter the occupation ID:</label><br>
        <textarea   value="{{ $funtion-> id_occupations }}"  name="id_occupations" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Write the name of the occupation:</label>
        <input value="{{ $funtion-> occupation_name }}" type="number" name="occupation_name" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>