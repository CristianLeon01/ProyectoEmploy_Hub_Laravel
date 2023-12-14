@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Relations/createRelation.css') }}">
<a href="{{ route ('relation') }}"> Back</a>

<section class="create">
    <h1 class="title">Create Your <span>Relation</span></h1>
    <form action="{{ route('store.relation') }}" method="POST">
        @csrf

        <label>Write the name of the related occupation :</label>
        <input name="name_related_occupation" type="text" required></><br><br>

        <label for="correo">Write Id Occupation</label>
        <input type="number" id=correo name="id_occupation" class="textarea1" required><br><br>

        <label for="correo">Write Occupation_name</label>
        <input type="number" id=correo name="occupation_name" class="textarea1" required><br><br>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>