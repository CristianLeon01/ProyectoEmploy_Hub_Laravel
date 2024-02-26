@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Knowledges/createKnowledges.css') }}">

<section class="create">
    <h1 class="title-knowledge">Create Your <span>Knowledge</span></h1>
    <form class="form-knowledge" action="{{ route('store.knowledge') }}" method="POST">
        @csrf

        <label>Write the name of your Knowledge :</label>
        <input  name="knowledge_name" type="text" required></input><br><br>

        <label>Write the description of the Knowledge:</label><br>
        <input  name="knowledge_description"  type="text" required></input><br><br>

        <label>Write the occupation id:</label>
        <input type="number"  name="id_occupations" required><br><br>

        <label>Write the name of the occupation:</label>
        <input type="text" name="occupation_name" required><br><br>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>