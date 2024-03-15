@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Selectors/createSelector.css') }}">

<section class="create">
    <h1 class="title-selector">Create Your <span>Selector</span></h1>
    <form class="form-selector" action="{{ route('store.selector') }}" method="POST">
        @csrf

        <label>Write your document number :</label>
        <input name="number_document_selector" type="number" required><br><br>

        <label for="tipo_selector">Document Type</label>
        <select id="tipo_selector" name="document_type_selector">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASSPORT">PASSPORT</option>
            <option value="CC_FOREIGNER">CC_FOREIGNER</option>
        </select>

        <label>Write your name:</label>
        <input type="text"  name="name_selector" required><br><br>

        <label>Write your phone :</label>
        <input type="number" name="phone_selector" required><br><br>

        <label>Write your email:</label>
        <input type="text" name="email_selector" required><br><br>

        <label for="" class="form-label">User Type Id</label>
        <select class="" name="id_user_types" id="id_user_types">
            @foreach ($user_type as $user_type)
            <option value="{{$user_type->id}}">{{$user_type->user_type_name }}</option>    
            @endforeach
        </select>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>