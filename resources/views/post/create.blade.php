@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Posts/createPost.css') }}">

<section class="create">
    <h1 class="title">Create Your <span>Post</span></h1>
    <form class="form-post" action="{{ route('store.post') }}" method="POST">
        @csrf

        <label>Write the name of the post:</label>
        <textarea  type="text" name="name_post" rows="4" cols="50" required></textarea><br><br>

        <label>Write the address:</label>
        <input type="text"  name="direction" required><br><br>

        <label>Write the phone:</label>
        <input type="text" name="phone" required><br><br>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>