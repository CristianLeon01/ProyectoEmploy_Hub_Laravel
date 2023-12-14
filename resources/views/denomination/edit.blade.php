@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Denominations/createDenomination.css') }}">
<a href="{{ route ('denomination') }}"> Back</a>

<section class="create">
    <h1 class="title">Create Your <span>denomination</span></h1>
    <form action="{{ route('update.denomination', $denomination->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Write the description of the denomination :</label>
        <textarea  value="{{ $denomination-> denomination_description }}" name="denomination_description" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Enter the occupation ID:</label><br>
        <textarea   value="{{ $denomination-> id_occupations }}"  name="id_occupations" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Write the name of the occupation:</label>
        <input value="{{ $denomination-> occupation_name }}" type="number" name="occupation_name" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>