@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Denominations/createDenomination.css') }}">
<a href="{{ route ('denomination') }}"> Back</a>

<section class="create">
    <h1 class="title">Create Your <span>Denomination</span></h1>
    <form action="{{ route('store.denomination') }}" method="POST">
        @csrf

        <label>Write the description of the denomination :</label>
        <textarea  name="denomination_description" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Enter the occupation ID:</label><br>
        <textarea  name="id_occupations" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Write the name of the occupation:</label>
        <input type="number"  name="occupation_name" required><br><br>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>