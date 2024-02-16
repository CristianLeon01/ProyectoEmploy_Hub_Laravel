@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.instructor') }}" class="boton1">Create New Instructor</a>
    <ul>
        @forelse ($instructors as $instructor)
        <table>
            <tr>
                <th>ID</th>
                <th>Document Number</th>
                <th>Document Type</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
            <tr>
                <td><a>{{ $instructor->id }}</a></td>
                <td><a>{{ $instructor->document_number }}</a></td>
                <td><a>{{ $instructor->document_type}}</a></td>
                <td><a>{{ $instructor->name }}</a></td>
                <td><a>{{ $instructor->last_name }}</a></td>
                <td><a>{{ $instructor->email }}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.instructor', $instructor->id) }}">{{ $instructor->id }}</a> |
                <a href="{{ route('edit.instructor', $instructor->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.instructor', ['instructor'=>$instructor->id]) }}"> 
                    @csrf
                    @method('DELETE')
                    <input type="submit" value='DELETE' class="boton1">
                </form>
            </li>
        @empty
            <p>No data.</p>
        @endforelse
    </ul>
</div>
@endsection