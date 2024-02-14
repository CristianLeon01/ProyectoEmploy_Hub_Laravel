@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Knowledges/createKnowledge.css') }}">
<section class="create">
    <h1 class="title">Create Your <span>Knowledge</span></h1>
    <form action="{{ route('update.knowledge', $knowledge->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Update the name of your Knowledge :</label>
        <textarea  value="{{ $knowledge-> knowledge_name }}" name="knowledge_name" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Update the description of the Knowledge:</label><br>
        <textarea   value="{{ $knowledge-> knowledge_description }}"  name="knowledge_description" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Update the occupation id:</label>
        <input value="{{ $knowledge-> id_occupations }}" type="number" name="id_occupations" required><br><br>

        <label>Update the name of the occupation:</label>
        <input  value="{{ $knowledge-> occupation_name }}" type="text" name="occupation_name" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>