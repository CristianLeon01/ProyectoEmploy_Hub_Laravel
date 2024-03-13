@extends('layouts.app')

@section('content')

<a href="{{ route('post')}}">Back</a>
<h1>{{ $post->name_post }}</h1>
<h1>{{ $post->description }}</h1>
@endsection