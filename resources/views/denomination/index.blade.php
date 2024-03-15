@extends('layouts.app')
@section('content')

<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.denomination') }}" class="boton2">Create New Denomination</a>
    <ul class="list-general">
        @forelse ($denominations as $denomination)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Denomination Description</th>
                <th class="table-header">Id Occupations</th>
                <th class="table-header">Occupation_name</th>
            </tr>
            <tr>
                <td><a>{{ $denomination->id }}</a></td>
                <td><a>{{ $denomination->denominate_description}}</a></td>
                <td><a>{{ $denomination->id_occupations }}</a></td>
                <td><a>{{ $denomination->occupation_name }}</a></td>
            </tr>
        </table>
        <li class="mi-elemento">
            <a href="{{ route('show.denomination', $denomination->id) }}" class="link">{{ $denomination->id }}</a> |
            <a href="{{ route('edit.denomination', $denomination->id) }}" class="boton1">EDIT</a> |
            <form method="POST" action="{{ route('destroy.denomination', ['denomination'=>$denomination->id]) }}" class="delete-form"> 
                @csrf
                @method('DELETE')
                <input type="submit" value='DELETE' class="boton1">
            </form>
        </li>
        @empty
        <p class="no-data">No hay datos.</p>
        @endforelse
    </ul>
</div>
@endsection
