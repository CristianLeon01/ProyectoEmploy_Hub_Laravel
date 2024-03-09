@extends('layouts.app')

@section('content')

<a href="{{ route('weighing')}}">Back</a>
<h1>{{ $weighing->languages }}</h1>
<h1>{{ $weighing->education }}</h1>
<h1>{{ $weighing->work_experience }}</h1>
<h1>{{ $weighing->technical_skills }}</h1>
<h1>{{ $weighing->previous_project }}</h1>
<h1>{{ $weighing->references }}</h1>
<h1>{{ $weighing->additional_course }}</h1>
@endsection