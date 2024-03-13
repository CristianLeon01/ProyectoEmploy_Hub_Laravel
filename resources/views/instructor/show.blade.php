@extends('layouts.app')

@section('content')

<a href="{{ route('instructor')}}">Back</a>
<h1>{{ $instructor->document_number }}</h1>
<h1>{{ $instructor->document_type }}</h1>
<h1>{{ $instructor->instructor_name }}</h1>
<h1>{{ $instructor->instructor_lastname }}</h1>
<h1>{{ $instructor->email }}</h1>
<h1>{{ $instructor->password }}</h1>
@endsection