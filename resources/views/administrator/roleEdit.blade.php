@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/Administrators/roleEdit.css') }}">

    <div class="container">
        <h1>Edit User Role</h1>
        <form method="POST" action="{{ route('administrator.roleEdit.update', ['user' => $user->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_user_types">User Type:</label>
                <select name="id_user_types" class="form-control">
                    @foreach ($users as $userType)
                        <option value="{{ $userType->id }}" {{ $userType->id == $user->id_user_types ? 'selected' : '' }}>
                            {{ $userType->user_type_name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Role</button>
        </form>
    </div>
@endsection
