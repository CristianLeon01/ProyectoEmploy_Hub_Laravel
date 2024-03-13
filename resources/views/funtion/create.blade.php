@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Functionns/createFuntions.css') }}">


<section class="create">
    <h1 class="title-funtion ">Create Your <span>Function</span></h1>
    <form class="form-funtion" action="{{ route('store.funtion') }}" method="POST">
        @csrf

        <label>Write the description of the function :</label>
        <input  name="function_description" type="text" required></input><br><br>

        <label>Enter the occupation ID:</label>
        <input  name="id_occupations" type="number" required><br><br>

        <label>Write the name of the occupation:</label>
        <input type="text"  name="occupation_name" required><br><br>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>