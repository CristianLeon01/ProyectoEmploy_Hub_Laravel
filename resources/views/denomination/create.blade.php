@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Denominations/createDenomination.css') }}">

<section class="create">
    <h1 class="title">Create Your <span>Denomination</span></h1>
    <form action="{{ route('store.denomination') }}" method="POST">
        @csrf

        <label>Write the description of the denomination :</label>
        <input name="denominate_description" type="text" required></input><br><br>

        <label>Enter the occupation ID:</label><br>
        <input  name="id_occupations" type="number" required></input><br><br>

        <label>Write the name of the occupation:</label>
        <input type="text" name="occupation_name" required><br><br>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
</section>
@endsection