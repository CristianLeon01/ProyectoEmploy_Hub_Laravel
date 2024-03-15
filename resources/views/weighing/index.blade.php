@extends('layouts.app')
@section('content')


<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.weighing') }}" class="boton2">Create New Weighing</a>
    <ul class="list-general">
        @forelse ($weightings as $weighing)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Languages</th>
                <th class="table-header">Education</th>
                <th class="table-header">Work Experience</th>
                <th class="table-header">Technical Skills</th>
                <th class="table-header">Previous Project</th>
                <th class="table-header">References</th>
                <th class="table-header">Additional Course</th>
            </tr>
            <tr>
                <td><a>{{ $weighing->id }}</a></td>
                <td><a>{{ $weighing->languages }}</a></td>
                <td><a>{{ $weighing->education}}</a></td>
                <td><a>{{ $weighing->work_experience }}</a></td>
                <td><a>{{ $weighing->technical_skills }}</a></td>
                <td><a>{{ $weighing->previous_project}}</a></td>
                <td><a>{{ $weighing->references}}</a></td>
                <td><a>{{ $weighing->additional_course }}</a></td>
            </tr>
        </table>
            <li class="list-element">
                <a href="{{ route('show.weighing', $weighing->id) }}" class="link">{{ $weighing->id }}</a> |
                <a href="{{ route('edit.weighing', $weighing->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.weighing', ['weighing'=>$weighing->id]) }}"> 
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