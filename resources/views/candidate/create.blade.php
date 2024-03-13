@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Candidates/createCandidates.css') }}">

<section class="create">
    <h1 class="titleCandidate">Create Your <span>Candidate</span></h1>
    <form class="form-candidate" action="{{ route('store.candidate') }}" method="POST">
        @csrf

        <label>Write your document number:</label>
        <input  name="number_document" type="number" required></input><br><br>

        <label>Select your document type:</label><br>
        <select id="document_type" name="document_type">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASSPORT">PASSPORT</option>
            <option value="CC_FOREIGNER">CC_FOREIGNER</option>
        </select>

        <label>Write your name:</label>
        <input type="text"  name="name" required><br><br>
        
        <label>Write phone</label>
        <input type="number"  name="phone" required><br><br>

        <label>Write your email:</label>
        <input type="email" name="email" required><br><br>

        <label for="exampleInputEmail" class="user_type">User Type Id</label>
        <select class="user_type" name="id_user_types" id="">
            @foreach ($user_types as $user_type)
            <option value="{{$user_type->id}}">{{$user_type->user_type_name}}</option>
            @endforeach
        </select>

        <label>Enter the life sheet ID:</label><br>
        <input  name="id_life_sheet"type= "number" required><br><br>

        <label for="exampleInputEmail" class="state">State id</label>
        <select class="state" name="id_state" id="">
            @foreach ($states as $state)
            <option value="{{$state->id}}">{{$state->state_name}}</option>
            @endforeach
        </select>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>