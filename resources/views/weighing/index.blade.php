@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.weighing') }}" class="boton1">Create New Weighing</a>
    <ul>
        @forelse ($weightings as $weighing)
        <table>
            <tr>
                <th>ID</th>
                <th>Languages</th>
                <th>Education</th>
                <th>Work Experiencie</th>
                <th>Technical Skills</th>
                <th>Previous Project</th>
1                <th>References</th>
                <th>Additional Course</th>
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
            <li>
                <a href="{{ route('show.weighing', $weighing->id) }}">{{ $weighing->id }}</a> |
                <a href="{{ route('edit.weighing', $weighing->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.weighing', ['weighing'=>$weighing->id]) }}"> 
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