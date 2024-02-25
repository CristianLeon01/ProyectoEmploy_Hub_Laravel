@extends('layouts.app')
@section('content')


<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.recruiter') }}" class="boton2">Create New Recruiter</a>
    <ul class="list-general">
        @forelse ($recruiters as $recruiter)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Number Document</th>
                <th class="table-header">Document Type</th>
                <th class="table-header">Name</th>
                <th class="table-header">Phone</th>
                <th class="table-header">Email</th>
            </tr>
            <tr>
                <td><a>{{ $recruiter->id }}</a></td>
                <td><a>{{ $recruiter->number_document }}</a></td>
                <td><a>{{ $recruiter->document_type}}</a></td>
                <td><a>{{ $recruiter->name }}</a></td>
                <td><a>{{ $recruiter->phone }}</a></td>
                <td><a>{{ $recruiter->email }}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('show.recruiter', $recruiter->id) }}" class="link">{{ $recruiter->id }}</a> |
            <a href="{{ route('edit.recruiter', $recruiter->id) }}" class="boton1">EDIT</a> |
            <form method="POST" action="{{ route('destroy.recruiter', ['recruiter'=>$recruiter->id]) }}" class="delete-form"> 
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