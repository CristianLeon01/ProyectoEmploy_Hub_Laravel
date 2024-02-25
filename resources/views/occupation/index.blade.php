@extends('layouts.app')
@section('content')


<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.occupation') }}" class="boton2">Create New Occupation</a>
    <ul class="list-general">
        @forelse ($occupations as $occupation)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Occupation Name</th>
                <th class="table-header">Occupation Description</th>
                <th class="table-header">Id Post</th>
            </tr>
            <tr>
                <td><a>{{ $occupation->id }}</a></td>
                <td><a>{{ $occupation->occupation_name }}</a></td>
                <td><a>{{ $occupation->occupation_description}}</a></td>
                <td><a>{{ $occupation->id_post }}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('show.occupation', $occupation->id) }}" class="link">{{ $occupation->id }}</a> |
            <a href="{{ route('edit.occupation', $occupation->id) }}" class="boton1">EDIT</a> |
            <form method="POST" action="{{ route('destroy.occupation', ['occupation'=>$occupation->id]) }}" class="delete-form"> 
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