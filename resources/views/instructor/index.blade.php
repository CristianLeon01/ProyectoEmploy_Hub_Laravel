@extends('layouts.app')
@section('content')


<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.instructor') }}" class="boton2">Create New Instructor</a>
    <ul class="list-general">
        @forelse ($instructors as $instructor)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Document Number</th>
                <th class="table-header">Document Type</th>
                <th class="table-header">Name</th>
                <th class="table-header">Last Name</th>
                <th class="table-header">Email</th>
            </tr>
            <tr>
                <td><a>{{ $instructor->id }}</a></td>
                <td><a>{{ $instructor->document_number }}</a></td>
                <td><a>{{ $instructor->document_type}}</a></td>
                <td><a>{{ $instructor->instructor_name }}</a></td>
                <td><a>{{ $instructor->instructor_lastname }}</a></td>
                <td><a>{{ $instructor->email }}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('show.instructor', $instructor->id) }}" class="link">{{ $instructor->id }}</a> |
            <a href="{{ route('edit.instructor', $instructor->id) }}" class="boton1">EDIT</a> |
            <form method="POST" action="{{ route('destroy.instructor', ['instructor'=>$instructor->id]) }}" class="delete-form"> 
                @csrf
                @method('DELETE')
                <input type="submit" value='DELETE' class="boton1">
            </form>
        </li>
        @empty
        <p class="no-data">No data.</p>
        @endforelse
    </ul>
</div>

@endsection