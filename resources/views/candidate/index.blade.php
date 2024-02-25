@extends('layouts.app')
@section('content')

<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.candidate') }}" class="boton2">Create New Candidate</a>
    <ul class="list-general">
        @forelse ($candidates as $candidate)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Document Number</th>
                <th class="table-header">Document Type</th>
                <th class="table-header">Name</th>
                <th class="table-header">Phone</th>
                <th class="table-header">Email</th>
            </tr>
            <tr>
                <td><a>{{ $candidate->id }}</a></td>
                <td><a>{{ $candidate->number_document }}</a></td>
                <td><a>{{ $candidate->document_type}}</a></td>
                <td><a>{{ $candidate->name }}</a></td>
                <td><a>{{ $candidate->phone }}</a></td>
                <td><a>{{ $candidate->email }}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('show.candidate', $candidate->id) }}" class="link"> {{ $candidate->id }}</a> |
            <a href="{{ route('edit.candidate', $candidate->id) }}" class="boton1">EDIT</a> |
            <form method="POST" action="{{ route('destroy.candidate', ['candidate'=>$candidate->id]) }}" class="delete-form"> 
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