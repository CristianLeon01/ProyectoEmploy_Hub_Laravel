@extends('layouts.app')
@section('content')
    <h2>Details</h2>
    <p>Id: {{ $department->id }}</p>
    <p>Name: {{ $department->department_name }}</p>
    <p>Created_at: {{ $department->created_at }}</p>
    <p>Updated_at: {{ $department->updated_at }}</p>
@endsection
