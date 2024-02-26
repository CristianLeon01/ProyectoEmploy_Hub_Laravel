@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Posts/editPosts.css') }}">

<section class="create">
    <h1 class="title-post">Create Your <span>Post</span></h1>
    <form class="form-post" action="{{ route('update.post', $post->id) }}" method="POST">
        @method('PUT')
        @csrf

        <label>Update your Write the name of the post:</label>
        <input  type="text" name="name_post" value="{{ $post-> name_post }}" required></input><br><br>

        <label>Update your Write the address:</label>
        <input type="text"  name="description" value="{{ $post-> description }}" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>