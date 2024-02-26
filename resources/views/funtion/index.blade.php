@extends('layouts.app')
@section('content')


<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.funtion') }}" class="boton2">Create New Function</a>
    <ul class="list-general">
        @forelse ($funtions as $funtion)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Function Description</th>
                <th class="table-header">Id Occupations</th>
                <th class="table-header">Occupation_name</th>
            </tr>
            <tr>
                <td><a>{{ $funtion->id }}</a></td>
                <td><a>{{ $funtion->function_description}}</a></td>
                <td><a>{{ $funtion->id_occupations }}</a></td>
                <td><a>{{ $funtion->occupation_name }}</a></td>
            </tr>
        </table>
        <li class="mi-elemento">
            <a href="{{ route('show.funtion', $funtion->id) }}" class="link">{{ $funtion->id }}</a> |
            <a href="{{ route('edit.funtion', $funtion->id) }}" class="boton1">EDIT</a> |
            <form method="POST" action="{{ route('destroy.funtion', ['funtion'=>$funtion->id]) }}" class="delete-form"> 
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