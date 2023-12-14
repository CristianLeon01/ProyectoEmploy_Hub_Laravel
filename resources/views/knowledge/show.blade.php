@extends('layouts.app')

@section('content')

<a href="{{ route('index.knowledge')}}">Back</a>
<h1>{{ $knowledge->knowledge_name }}</h1>
<h1>{{ $knowledge->knowledge_description }}</h1>
<h1>{{ $knowledge->id_occupations }}</h1>
<h1>{{ $knowledge->occupation_name }}</h1>
@endsection