@extends('layouts.app')

@section('content')

<a href="{{ route('index.post')}}">Back</a>
<h1>{{ $post->name_post }}</h1>
<h1>{{ $post->direction }}</h1>
<h1>{{ $post->phone }}</h1>
@endsection