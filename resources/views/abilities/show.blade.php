@extends('layouts.app')

@section('content')

<a href="{{ route('index.skill')}}">Back</a>
<h1>{{ $skill->skill_name }}</h1>
<h1>{{ $skill->skill_description }}</h1>
<h1>{{ $skill->id_occupations }}</h1>
<h1>{{ $skill->occupation_name }}</h1>
@endsection