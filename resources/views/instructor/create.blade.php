@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/Instructor/createInstructor.css') }}">

<section class="createInstructor">
    <h1 class="titleInstructor">Create Your <span>Instructor</span></h1>
    <form class="form-instructor" action="{{ route('store.instructor') }}" method="POST">
        @csrf

        <label>Write your document number:</label>
        <input  type="number" name="document_number" rows="4" cols="50" required><br><br>

        <label>Select your document type:</label><br>
        <select id="document_type" name="document_type">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASSPORT">PASSPORT</option>
            <option value="CC_FOREIGNER">CC_FOREIGNER</option>
        </select>

        <label>Write your name:</label>
        <input type="text"  name="instructor_name" required><br><br>

        <label>Write your last name:</label>
        <input type="text" name="instructor_lastname" required><br><br>

        <label>Write your email:</label>
        <input type="text" name="email" required><br><br>

        <label>Write your password:</label>
        <input type="password" name="password" required><br><br>

        <label for="id_administrator">Administrator ID:</label> 
        <input type="number" name="id_administrator" id="id_administrator" required>

        <center><button type="submit" class="create-instructor-button">Create</button></center>
    </form>
</section>
@endsection
