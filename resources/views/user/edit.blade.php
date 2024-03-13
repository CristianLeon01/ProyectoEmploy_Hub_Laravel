@extends('layouts.app')
@section('content')

<a href="{{ route ('user') }}">Back</a>
<link rel="stylesheet" href="{{ asset('css/createUser.css') }}">

<section class="create-user" style="width: 30%; margin-left: 35%">
    <h1 class="titleUser">Update Your User</h1>
    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputUserName" class="form-label">User Name</label>
            <input type="text" class="form-control" name="username" value="{{old('username')}}" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" value="{{old('password')}}" required>
        </div>

        <button type="submit" value="Update" class="btn btn-primary">Update</button>
    </form>
@endsection
</section>