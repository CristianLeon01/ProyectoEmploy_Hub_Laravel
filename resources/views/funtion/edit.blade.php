@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Functionns/editFuntions.css') }}">

<section class="create">
    <h1 class="title-funtion">Update Your <span>Funtion</span></h1>
    <form class="form-funtion" action="{{ route('update.funtion', $funtion->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Update the description of the function :</label>
        <input  value="{{ $funtion-> function_description }}" name="function_description"  type="text" required></input><br><br>

        <label>Update your the occupation ID:</label>
        <input  value="{{ $funtion-> id_occupations }}"  name="id_occupations"  type="number" required></input><br><br>

        <label>Update the name of the occupation:</label>
        <input value="{{ $funtion-> occupation_name }}" type="text" name="occupation_name" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>
