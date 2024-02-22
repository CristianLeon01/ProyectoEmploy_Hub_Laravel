@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Denominations/createDenomination.css') }}">

<section class="create">
    <h1 class="title">Create Your <span>denomination</span></h1>
    <form action="{{ route('update.denomination', $denomination->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Update the description of the denomination :</label>
        <input  value="{{ $denomination-> denominate_description }}" name="denominate_description" type="text" required></input><br><br>

        <input type="hidden" name="id_occupations" value="{{ $relation->id_occupations }}">

        <input type="hidden" name="occupation_name" value="{{ $relation->occupation_name }}">

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>