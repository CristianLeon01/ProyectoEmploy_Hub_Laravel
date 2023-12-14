@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.relation') }}" class="boton1">Edit your Relation</a>
    <ul>
        @forelse ($relations as $relation)
        <table>
            <tr>
                <th>ID</th>
                <th>Name Related Occupation</th>
            </tr>
            <tr>
                <td><a>{{ $relation->id }}</a></td>
                <td><a>{{ $relation->name_related_occupation }}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.relation', $relation->id) }}">{{ $relation->id }}</a> |
                <a href="{{ route('edit.relation', $relation->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.relation', ['relation'=>$relation->id]) }}"> 
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