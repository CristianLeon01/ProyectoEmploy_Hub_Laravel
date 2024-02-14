@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Relations/createRelation.css') }}">
<a href="{{ route ('relation') }}"> Back</a>

<section class="create">
    <h1 class="title">Edit Your <span>Relation</span></h1>
    <form action="{{ route('update.relation', $recruiter->id) }}" method="POST">
        @method('PUT')
        @csrf

        <label>Update your Write the name of the related occupation :</label>
        <input name="name_related_occupation" type="text" required value="{{ $relation-> name_related_occupation }}"><input></><br><br>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>