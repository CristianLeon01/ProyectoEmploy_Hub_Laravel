@extends('layouts.app')
@section('content')
    <h2>Create a new city</h2>
    <form action="{{ route('city.store') }}" method="POST">
        @csrf
        <label>City name</label>
        <input type="text" name="city_name" required>
        <label>Department name</label>
        <select name="department_id">
            @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->department_name }}</option>
            @endforeach
        </select>
        <button type="submit">Create</button>
    </form>
    <br>
    <button><a href="{{ route('city.index') }}">Cancel</a></button>
@endsection
