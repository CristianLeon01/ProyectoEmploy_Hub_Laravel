@extends('layouts.app')

@section('content')

<a href="{{ route('index.selector')}}">Back</a>
<h1>{{ $selector->number_document_selector }}</h1>
<h1>{{ $selector->document_type_selector }}</h1>
<h1>{{ $selector->name_selector }}</h1>
<h1>{{ $selector->phone_selector }}</h1>
<h1>{{ $selector->email_selector }}</h1>
@endsection