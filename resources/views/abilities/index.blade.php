@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.skill') }}" class="boton1">Create New Ability</a>
    <ul>
        @forelse ($skills as $skill)
        <table>
            <tr>
                <th>ID</th>
                <th>Skill Name</th>
                <th>Skill Description</th>
                <th>Id Occupations</th>
                <th>Occuoation_name</th>
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
                <a href="{{ route('show.skill', $skill->id) }}">{{ $skill->id }}</a> |
                <a href="{{ route('edit.skill', $skill->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.skill', ['skill'=>$skill->id]) }}"> 
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