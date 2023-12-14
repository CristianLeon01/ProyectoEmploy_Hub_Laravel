@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.lifeSheet') }}" class="boton1">Create New LifeSheet</a>
    <ul>
        @forelse ($resumes as $lifeSheet)
        <table>
            <tr>
                <th>ID</th>
                <th>Experience</th>
                <th>Education</th>
                <th>Operator</th>
            </tr>
            <tr>
                <td><a>{{ $lifeSheet->id }}</a></td>
                <td><a>{{ $lifeSheet->experience }}</a></td>
                <td><a>{{ $lifeSheet->educationn}}</a></td>
                <td><a>{{ $lifeSheet->operator }}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.lifeSheet', $lifeSheet->id) }}">{{ $lifeSheet->id }}</a> |
                <a href="{{ route('edit.lifeSheet', $lifeSheet->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.lifeSheet', ['lifeSheet'=>$lifeSheet->id]) }}"> 
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