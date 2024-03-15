@extends('layouts.app')
@section('content')
    <h2>Edit department</h2>
    <form action="{{ route('department.update', $department) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Department name</label>
        <input type="text" name="department_name" value="{{ $department->department_name }}" required autocomplete="off">
        <button type="submit">Update</button>
    </form>
@endsection
