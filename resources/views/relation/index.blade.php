@extends('layouts.app')
@section('content')


<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.relation') }}" class="boton2">Create your Relation</a>
    <ul class="list-general">
        @forelse ($relations as $relation)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Name Related Occupation</th>
            </tr>
            <tr>
                <td><a>{{ $relation->id }}</a></td>
                <td><a>{{ $relation->name_related_occupation }}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('show.relation', $relation->id) }}" class="link">{{ $relation->id }}</a> |
            <a href="{{ route('edit.relation', $relation->id) }}" class="boton1">EDIT</a> |
            <form method="POST" action="{{ route('destroy.relation', ['relation'=>$relation->id]) }}"> 
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