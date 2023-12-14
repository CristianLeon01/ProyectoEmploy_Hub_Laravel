@extends('layouts.app')

@section('content')

<a href="{{ route('index.denomination')}}">Back</a>
<h1>{{ $denomination->denomination_description }}</h1>
<h1>{{ $denomination->id_occupations }}</h1>
<h1>{{ $denomination->occupation_name }}</h1>
@endsection