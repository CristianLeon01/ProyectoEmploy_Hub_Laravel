@extends('layouts.app')
@section('content')
    <h2>Details</h2>
    <p>Id: {{ $city->id }}</p>
    <p>Name: {{ $city->city_name }}</p>
    <p>Department: <a href="{{ route('department.index') }}">{{ $city->department->department_name }}</a> </p>
    <p>Created_at: {{ $city->created_at }}</p>
    <p>Updated_at: {{ $city->updated_at }}</p>
@endsection
