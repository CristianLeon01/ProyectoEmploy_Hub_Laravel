@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Posts/createPosts.css') }}">

<section class="create">
    <h1 class="title-post">Create Your <span>Post</span></h1>
    <form class="form-post" action="{{ route('store.post') }}" method="POST">
        @csrf

        <label>Write the name of the post:</label>
        <input  type="text" name="name_post" required></input><br><br>

        <label>Write the description:</label>
        <input type="text"  name="description" required><br><br>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>