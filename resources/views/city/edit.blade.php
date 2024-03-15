@extends('layouts.app')
@section('content')
    <h2>Edit city</h2>
    <form action="{{ route('city.update', $city) }}" method="POST">
        @csrf
        @method('PUT')
        <label>City name</label>
        <input type="text" name="city_name" value="{{ $city->city_name }}" required autocomplete="off">
        <label>Department name</label>
        <select name="department_id">
            @foreach ($departments as $department)
                <option value="{{ $department->id }}" {{ $department->id == $city->department_id ? 'selected' : '' }}>
                    {{ $department->department_name }}
                </option>
            @endforeach
        </select>
        <button type="submit">Update</button>
    </form>
@endsection
