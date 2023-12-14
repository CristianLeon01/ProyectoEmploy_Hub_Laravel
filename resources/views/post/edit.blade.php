@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Posts/createPost.css') }}">
<a href="{{ route ('post') }}"> Back</a>

<section class="create">
    <h1 class="title">Create Your <span>Post</span></h1>
    <form action="{{ route('update.post', $post->id) }}" method="POST">
        @method('PUT')
        @csrf

        <label>Write the name of the post:</label>
        <textarea  type="text" name="name_post" rows="4" cols="50" value="{{ $post-> name_post }}" required></textarea><br><br>

        <label>Write the address:</label>
        <input type="text"  name="direction" value="{{ $post-> direction }}" required><br><br>

        <label>Write the phone:</label>
        <input type="text" name="phone" value="{{ $post-> phone }}" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>