@extends('layouts.app')

@section('content')

<a href="{{ route('index.recruiter')}}">Back</a>
<h1>{{ $recruiter->name_related_occupation }}</h1>
@endsection