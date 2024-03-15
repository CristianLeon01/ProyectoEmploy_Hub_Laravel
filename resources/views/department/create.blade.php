@extends('layouts.app')
@section('content')
    <h2>Create a new department</h2>
    <form action="{{ route('department.store') }}" method="POST">
        @csrf
        <label>Department name</label>
        <input type="text" name="department_name" required autocomplete="off">
        <button type="submit">Create</button>
    </form>
    <br>
    <button><a href="{{ route('department.index') }}">Cancel</a></button>
@endsection
