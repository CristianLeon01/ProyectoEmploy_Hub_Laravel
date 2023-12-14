@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.knowledge') }}" class="boton1">Create New Knowledge</a>
    <ul>
        @forelse ($knowledges as $knowledge)
        <table>
            <tr>
                <th>ID</th>
                <th>Skill Name</th>
                <th>Skill Description</th>
                <th>Id Occupations</th>
                <th>Occuoation_name</th>
            </tr>
            <tr>
                <td><a>{{ $knowledge->id }}</a></td>
                <td><a>{{ $knowledge->knowledge_name }}</a></td>
                <td><a>{{ $knowledge->knowledge_description}}</a></td>
                <td><a>{{ $knowledge->id_occupations }}</a></td>
                <td><a>{{ $knowledge->occupation_name }}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.knowledge', $knowledge->id) }}">{{ $knowledge->id }}</a> |
                <a href="{{ route('edit.knowledge', $knowledge->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.knowledge', ['knowledge'=>$knowledge->id]) }}"> 
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