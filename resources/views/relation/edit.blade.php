@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Relations/editRelations.css') }}">

<section class="create">
    <h1 class="title-relation">Edit Your <span>Relation</span></h1>
    <form class="form-relation" action="{{ route('update.relation', $relation->id) }}" method="POST">
        @method('PUT')
        @csrf

        <label>Update your Write the name of the related occupation:</label>
        <input name="name_related_occupation" type="text" required value="{{ $relation-> name_related_occupation }}"><br><br>

        <label>Update your Id Occupation:</label>
        <input type="number" name="id_occupations" value="{{ $relation->id_occupations }}"><br><br>

        <label>Update your Occupation_name:</label>
        <input type="text" name="occupation_name" value="{{ $relation->occupation_name }}"><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>