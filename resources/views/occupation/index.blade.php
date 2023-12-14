@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.occupation') }}" class="boton1">Create New Occupation</a>
    <ul class="mi-lista">
        @forelse ($occupations as $occupation)
        <table>
            <tr>
                <th>ID</th>
                <th>Occupation Name</th>
                <th>Occupation Description</th>
                <th>Id  Post</th>
            </tr>
            <tr>
                <td><a>{{ $occupation->id }}</a></td>
                <td><a>{{ $occupation->occupation_name }}</a></td>
                <td><a>{{ $occupation->occupation_description}}</a></td>
                <td><a>{{ $occupation->id_post }}</a></td>
            </tr>
        </table>
            <li class="mi-elemento">
                <a href="{{ route('show.occupation', $occupation->id) }}">{{ $occupation->id }}</a> |
                <a href="{{ route('edit.occupation', $occupation->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.occupation', ['occupation'=>$occupation->id]) }}"> 
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