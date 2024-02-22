@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Knowledges/createKnowledge.css') }}">
<section class="create">
    <h1 class="title">Create Your <span>Knowledge</span></h1>
    <form action="{{ route('update.knowledge', $knowledge->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Update the name of your Knowledge :</label>
        <input  value="{{ $knowledge-> knowledge_name }}" name="knowledge_name" type="text" required></input><br><br>

        <label>Update the description of the Knowledge:</label><br>
        <input  value="{{ $knowledge-> knowledge_description }}"  name="knowledge_description" type="text" required></input><br><br>

        <input type="hidden" name="id_occupations" value="{{ $relation->id_occupations }}">

        <input type="hidden" name="occupation_name" value="{{ $relation->occupation_name }}">

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>