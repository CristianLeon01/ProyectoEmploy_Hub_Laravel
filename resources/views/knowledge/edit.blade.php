@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Knowledges/editKnowledges.css') }}">
<section class="create">
    <h1 class="title-knowledge">Update Your <span>Knowledge</span></h1>
    <form class="form-knowledge" action="{{ route('update.knowledge', $knowledge->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Update the name of your Knowledge :</label>
        <input  value="{{ $knowledge-> knowledge_name }}" name="knowledge_name" type="text" required></input><br><br>

        <label>Update the description of the Knowledge:</label>
        <input  value="{{ $knowledge-> knowledge_description }}"  name="knowledge_description" type="text" required></input><br><br>

        <label>Update the occupation id:</label>
        <input type="number" name="id_occupations" value="{{ $knowledge-> id_occupations }}"><br><br>

        <label>Update the name of the occupation:</label>
        <input type="text" name="occupation_name" value="{{ $knowledge-> occupation_name }}"><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>