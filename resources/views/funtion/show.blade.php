@extends('layouts.app')

@section('content')

<a href="{{ route('index.funtion')}}">Back</a>
<h1>{{ $funtion->function_description }}</h1>
<h1>{{ $funtion->id_occupations }}</h1>
<h1>{{ $funtion->occupation_name }}</h1>
@endsection