@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Denominations/editDenominations.css') }}">

<section class="create">
    <h1 class="titleDenomination">Update Your <span>Denomination</span></h1>
    <form class="form-denomination" action="{{ route('update.denomination', $denomination->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Update the description of the denomination :</label>
        <input  value="{{ $denomination-> denominate_description }}" name="denominate_description" type="text" required></input><br><br>

        <label>Update the occupation ID :</label>
        <input type="number" name="id_occupations" value="{{ $denomination-> id_occupations }}">

        <label>Update the name of the occupation: :</label>
        <input type="text" name="occupation_name" value="{{ $denomination-> occupation_name }}">

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>