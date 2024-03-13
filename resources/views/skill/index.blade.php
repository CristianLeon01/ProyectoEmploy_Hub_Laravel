@extends('layouts.app')
@section('content')
<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.skill') }}" class="boton2">Create New Ability</a>
    <ul class="list-general">
        @forelse ($skills as $skill)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Skill Name</th>
                <th class="table-header">Skill Description</th>
                <th class="table-header">Id Occupations</th>
                <th class="table-header">Occupation Name</th>
            </tr>
            <tr>
                <td><a>{{ $skill->id }}</a></td>
                <td><a>{{ $skill->skill_name }}</a></td>
                <td><a>{{ $skill->skill_description}}</a></td>
                <td><a>{{ $skill->id_occupations }}</a></td>
                <td><a>{{ $skill->occupation_name }}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('show.skill', $skill->id) }}" class="link"> {{ $skill->id }}</a> |
            <a href="{{ route('edit.skill', $skill->id) }}" class="boton1">EDIT</a> |
            <form method="POST" action="{{ route('destroy.skill', ['skill'=>$skill->id]) }}" class="delete-form"> 
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