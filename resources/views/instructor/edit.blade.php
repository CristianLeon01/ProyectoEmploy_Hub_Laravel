@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Administrators/administrators.css') }}">
<section class="create">
    <h1 class="title">Create Your <span>Administrator</span></h1>
    <form action="{{ route('update.instructor', $instructor->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Update your document number:</label>
        <input  type="text" name="document_number" rows="4" cols="50" value="{{ $instructor-> document_number }}" required></input><br><br>

        <label>Update your document type:</label><br>
        <select id="document_type" name="document_type" value="{{ $instructor-> document_type }}">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASSPORT">PASSPORT</option>
            <option value="CC_FOREIGNER">CC_FOREIGNER</option>
        </select>

        <label>Update your name:</label>
        <input type="text"  name="name" value="{{ $instructor-> instructor_name }}"required><br><br>

        <label>Update your last name:</label>
        <input type="text" name="last_name" value="{{ $instructor-> instructor_lastname }}" required><br><br>

        <label>Update your email:</label>
        <input type="text" name="email" value="{{ $instructor-> email }}" required><br><br>

        <label>Update your password:</label>
        <input type="password" name="password" value="{{ $instructor-> password }}" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
</section>
@endsection