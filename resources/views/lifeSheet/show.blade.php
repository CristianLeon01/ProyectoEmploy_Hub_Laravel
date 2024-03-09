@extends('layouts.app')

@section('content')

<a href="{{ route('lifeSheet')}}">Back</a>
<h1>{{ $lifeSheet->experience }}</h1>
<h1>{{ $lifeSheet->education }}</h1>
<h1>{{ $lifeSheet->operator }}</h1>
@endsection