@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.recruiter') }}" class="boton1">Create New Recruiter</a>
    <ul>
        @forelse ($recruiters as $recruiter)
        <table>
            <tr>
                <th>ID</th>
                <th>Number Document</th>
                <th>Document Type</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
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
                <a href="{{ route('show.recruiter', $recruiter->id) }}">{{ $recruiter->id }}</a> |
                <a href="{{ route('edit.recruiter', $recruiter->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.recruiter', ['recruiter'=>$recruiter->id]) }}"> 
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