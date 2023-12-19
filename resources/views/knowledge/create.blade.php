@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Knowledges/createKnowledge.css') }}">

<section class="create">
    <h1 class="title">Create Your <span>Knowledge</span></h1>
    <form action="{{ route('store.knowledge') }}" method="POST">
        @csrf

        <label>Write the name of your Knowledge :</label>
        <textarea  name="knowledge_name" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Write the description of the Knowledge:</label><br>
        <textarea  name="knowledge_description" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Write the occupation id:</label>
        <input type="number"  name="id_occupations" required><br><br>

        <label>Write the name of the occupation:</label>
        <input type="text" name="occupation_name" required><br><br>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>