@extends('layouts.app')
@section('content')
    <h2>List of cities</h2>
    <td><a href="{{ route('city.create') }}">Create city</a></td>
    @livewire('city-show')
    @livewireScripts
@endsection
