@extends('layouts.app')

@section('content')

<a href="{{ route('index.recruiter')}}">Back</a>
<h1>{{ $recruiter->number_document }}</h1>
<h1>{{ $recruiter->document_type }}</h1>
<h1>{{ $recruiter->name }}</h1>
<h1>{{ $recruiter->phone }}</h1>
<h1>{{ $recruiter->email }}</h1>
@endsection