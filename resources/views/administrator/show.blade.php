@extends('layouts.app')

@section('content')

<a href="{{ route('administrator.index')}}">Back</a>
<h1>{{ $administrator->document_number }}</h1>
<h1>{{ $administrator->document_type }}</h1>
<h1>{{ $administrator->name }}</h1>
<h1>{{ $administrator->last_name }}</h1>
<h1>{{ $administrator->email }}</h1>
<h1>{{ $administrator->password }}</h1>
<h1>{{ $administrator->id_user_types }}</h1>
@endsection