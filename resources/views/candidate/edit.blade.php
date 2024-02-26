@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Candidates/editCandidates.css') }}">
<section class="create">
    <h1 class="titleCandidate">Update <span>Candidate</span></h1>
    <form class="form-candidate" action="{{ route('update.candidate', $candidate->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Update your document number:</label>
        <input  value="{{ $candidate-> number_document }}" name="number_document" type="number" required></input><br><br>

        <label>Update your document type:</label><br>
        <select id="document_type" name="document_type" value="{{ $candidate-> document_type }}">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASSPORT">PASSPORT</option>
            <option value="CC_FOREIGNER">CC_FOREIGNER</option>
        </select>

        <label>Update your name:</label><br>
        <input   value="{{ $candidate-> name }}"  name="name" rows="4" type="text" required></input><br><br>

        <label>Update phone:</label>
        <input value="{{ $candidate-> phone }}" type="number" name="phone" required><br><br>

        <label>Update your email:</label>
        <input value="{{ $candidate-> email }}" type="email" name="email" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>