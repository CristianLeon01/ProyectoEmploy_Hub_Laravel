@extends('layouts.app')
@section('content')


<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.knowledge') }}" class="boton2">Create New Knowledge</a>
    <ul class="list-general">
        @forelse ($knowledges as $knowledge)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Skill Name</th>
                <th class="table-header">Skill Description</th>
                <th class="table-header">Id Occupations</th>
                <th class="table-header">Occupation Name</th>
            </tr>
            <tr>
                <td><a>{{ $knowledge->id }}</a></td>
                <td><a>{{ $knowledge->knowledge_name }}</a></td>
                <td><a>{{ $knowledge->knowledge_description }}</a></td>
                <td><a>{{ $knowledge->id_occupations }}</a></td>
                <td><a>{{ $knowledge->occupation_name }}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('show.knowledge', $knowledge->id) }}" class="link">{{ $knowledge->id }}</a> |
            <a href="{{ route('edit.knowledge', $knowledge->id) }}" class="boton1">EDIT</a> |
            <form method="POST" action="{{ route('destroy.knowledge', ['knowledge'=>$knowledge->id]) }}" class="delete-form"> 
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