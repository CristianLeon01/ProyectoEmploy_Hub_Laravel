@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Administrators/createAdministrators.css') }}">
<section class="create">
    <h1 class="titleAdmin">Create Your <span>Administrator</span></h1>
    <form class="form-admin" action="{{ route('administrator.store') }}" method="POST">
        @csrf

        <label>Write your document number:</label>
        <input  type="text" name="document_number" required></input><br><br>

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

        <label>Write your last name:</label>
        <input type="text" name="last_name" required><br><br>

        <label>Write your email:</label>
        <input type="text" name="email" required><br><br>

        <label>Write your password:</label>
        <input type="password" name="password" required><br><br>

        <label for="exampleInputEmail" class="user_type">User Type Id</label>
        <select class="user_type" name="id_user_types" id="">
            @foreach ($user_types as $user_type)
            <option value="{{$user_type->id}}">{{$user_type->user_type_name}}</option>    
            @endforeach
        </select>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>