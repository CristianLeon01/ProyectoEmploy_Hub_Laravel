@extends('layouts.app')

@section('content')

<a href="{{ route('index.user')}}">Back</a>
<h1>{{ $user->username }}</h1>
<h1>{{ $user->email }}</h1>
<h1>{{ $user->id_user_types }}</h1>
@endsection