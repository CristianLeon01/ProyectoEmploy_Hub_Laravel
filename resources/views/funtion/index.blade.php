@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.funtion') }}" class="boton1">Create New Function</a>
    <ul>
        @forelse ($funtions as $funtion)
        <table>
            <tr>
                <th>ID</th>
                <th>Function Description</th>
                <th>Id Occupations</th>
                <th>Occupation_name</th>
            </tr>
            <tr>
                <td><a>{{ $funtion->id }}</a></td>
                <td><a>{{ $funtion->function_description}}</a></td>
                <td><a>{{ $funtion->id_occupations }}</a></td>
                <td><a>{{ $funtion->occupation_name }}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.funtion', $funtion->id) }}">{{ $funtion->id }}</a> |
                <a href="{{ route('edit.funtion', $funtion->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.funtion', ['funtion'=>$funtion->id]) }}"> 
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