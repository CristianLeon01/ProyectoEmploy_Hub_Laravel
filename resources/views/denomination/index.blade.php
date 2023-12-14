@extends('layouts.app')
@section('content')

<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.denomination') }}" class="boton1">Create New Denomination</a>
    <ul class="mi-lista">
        @forelse ($denominations as $denomination)
        <table>
            <tr>
                <th>ID</th>
                <th>Denomination Description</th>
                <th>Id Occupations</th>
                <th>Occupation_name</th>
            </tr>
            <tr>
                <td><a>{{ $denomination->id }}</a></td>
                <td><a>{{ $denomination->denomination_description}}</a></td>
                <td><a>{{ $denomination->id_occupations }}</a></td>
                <td><a>{{ $denomination->occupation_name }}</a></td>
            </tr>
        </table>
            <li class="mi-elemento">
                <a href="{{ route('show.denomination', $denomination->id) }}">{{ $denomination->id }}</a> |
                <a href="{{ route('edit.denomination', $denomination->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.denomination', ['denomination'=>$denomination->id]) }}"> 
                    @csrf
                    @method('DELETE')
                    <input type="submit" value='DELETE' class="boton1">
                </form>
            </li>
        @empty
            <p>No hay datos.</p>
        @endforelse
    </ul>
</div>
@endsection
