@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Relations/createRelation.css') }}">

<section class="create">
    <h1 class="title">Edit Your <span>Relation</span></h1>
    <form action="{{ route('update.relation', $relation->id) }}" method="POST">
        @method('PUT')
        @csrf

        <label>Update your Write the name of the related occupation :</label>
        <input name="name_related_occupation" type="text" required value="{{ $relation-> name_related_occupation }}"><input></><br><br>

        <input type="hidden" name="id_occupations" value="{{ $relation->id_occupations }}">

        <input type="hidden" name="occupation_name" value="{{ $relation->occupation_name }}">

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>