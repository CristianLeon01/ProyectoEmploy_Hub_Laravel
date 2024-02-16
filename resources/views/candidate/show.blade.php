@extends('layouts.app')

@section('content')

<a href="{{ route('candidate')}}">Back</a>
<h1>{{ $candidate->document_number }}</h1>
<h1>{{ $candidate->document_type }}</h1>
<h1>{{ $candidate->name }}</h1>
<h1>{{ $candidate->phone }}</h1>
<h1>{{ $candidate->email }}</h1>
@endsection