@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Relations/createRelation.css') }}">

<section class="create">
    <h1 class="title-relation">Create Your <span>Requisition</span></h1>
    <form class="form-relation" action="{{ route('store.requisition') }}" method="POST">
        @csrf

        <label> Write the job description</label>
        <input name="charge_description" type="text" value="{{ $relation-> charge_description }}"required><br><br>

        <label for="correo">Write the justification</label>
        <input type="number" id=correo name="justification" class="textarea1" value="{{ $relation-> justification }}" required><br><br>

        <label for="correo">Write your ideal candidate </label>
        <input type="text" id=correo name="ideal_candidate" class="textarea1" value="{{ $relation-> ideal_candidate }}"required><br><br>

        <label for="correo">Write the mission charge</label>
        <input type="text" id=correo name="mission_charge" class="textarea1" value="{{ $relation-> mission_charge }}"required><br><br>

        <label for="correo">Write the responsabilities</label>
        <input type="text" id=correo name="responsabilities" class="textarea1" value="{{ $relation-> responsabilities }}" required><br><br>

        <label for="correo">Write the candidate description</label>
        <input type="text" id=correo name="candidate_description" class="textarea1"  value="{{ $relation-> candidate_description }}"required><br><br>

        <label for="correo">Write the candidate talents</label>
        <input type="text" id=correo name="candidate_talents" class="textarea1" value="{{ $relation-> candidate_talents }}"required><br><br>

        <label for="correo">Write the selection criteria</label>
        <input type="text" id=correo name="selection_criteria" class="textarea1" value="{{ $relation-> selection_criteria }}"required><br><br>

        <input type="hidden" name="company_id" value="{{ $offer->company_id }}">

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>
