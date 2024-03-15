@extends('layouts.app')
@section('content')
    <h2>List of departments</h2>
    <td><a href="{{ route('department.create') }}">Create department</a></td>
    @livewire('department-show')
    @livewireScripts
@endsection
