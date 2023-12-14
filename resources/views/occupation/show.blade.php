@extends('layouts.app')

@section('content')

<a href="{{ route('index.occupation')}}">Back</a>
<h1>{{ $occupation->occupation_name }}</h1>
<h1>{{ $occupation->occupation_description }}</h1>
<h1>{{ $occupation->id_post }}</h1>
@endsection