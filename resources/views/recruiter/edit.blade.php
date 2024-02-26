@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Recruiters/editRecruiters.css') }}">

<section class="create">
    <h1 class="title-recruiter">Edit Your <span>Recruiter</span></h1>
    <form class="form-recruiter" action="{{ route('update.recruiter', $recruiter->id) }}" method="POST">
        @method('PUT')
        @csrf

        <label>Update your Write your document number :</label>
        <input name="number_document" type="number" required value="{{ $recruiter-> number_document }}"><br><br>

        <label for="tipo_recruiter">Document Type</label>
        <select id="tipo_recruiter" name="document_type" value="{{ $recruiter-> document_type }}">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASSPORT">PASSPORT</option>
            <option value="CC_FOREIGNER">CC_FOREIGNER</option>
        </select>

        <label>Update Write your name:</label>
        <input type="text"  name="name" required value="{{ $recruiter-> name }}"><br><br>

        <label>Update your Write your phone :</label>
        <input name="phone" type="number" required value="{{ $recruiter-> phone }}"><br><br>

        <label>Update your Write your email:</label>
        <input type="text" name="email" required value="{{ $recruiter-> email }}"><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>