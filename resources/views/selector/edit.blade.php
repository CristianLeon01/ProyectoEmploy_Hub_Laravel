@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Selectors/createSelector.css') }}">
<section class="create">
    <h1 class="title">Edit Your <span>Selector</span></h1>
    <form action="{{ route('update.selector', $selector->id) }}" method="POST">
        @method('PUT')
        @csrf

        <label>Update your document number :</label>
        <input name="number_document_selector" type="number" required value="{{ $selector-> number_document_selector }}"><input></><br><br>

        <label for="tipo_recruiter">Update your Document Type</label>
        <select id="tipo_recruiter" name="document_type_selector" value="{{ $selector-> document_type_selector }}">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASSPORT">PASSPORT</option>
            <option value="CC_FOREIGNER">CC_FOREIGNER</option>
        </select>

        <label>Update your name:</label>
        <input type="text"  name="name_selector" required value="{{ $selector-> name_selector }}"><br><br>

        <label>Update your phone :</label>
        <input name="phone_selector" type="number" required value="{{ $selector-> phone_selector }}"><input></><br><br>

        <label>Update your email:</label>
        <input type="text" name="email_selector" required value="{{ $selector-> email_selector }}"><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>