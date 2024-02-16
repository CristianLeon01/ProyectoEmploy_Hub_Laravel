@extends('layouts.app')
@section('content')

<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.candidate') }}" class="boton1">Create New Candidate</a>
    <ul>
        @forelse ($candidates as $candidate)
        <table>
            <tr>
                <th>ID</th>
                <th>Document Number</th>
                <th>Document Type</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
            <tr>
                <td><a>{{ $candidate->id }}</a></td>
                <td><a>{{ $candidate->document_number }}</a></td>
                <td><a>{{ $candidate->document_type}}</a></td>
                <td><a>{{ $candidate->name }}</a></td>
                <td><a>{{ $candidate->phone }}</a></td>
                <td><a>{{ $candidate->email }}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.candidate', $candidate->id) }}">{{ $candidate->id }}</a> |
                <a href="{{ route('edit.candidate', $candidate->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.candidate', ['candidate'=>$candidate->id]) }}"> 
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