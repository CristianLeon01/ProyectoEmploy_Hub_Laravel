@extends('layouts.app')

@section('content')

<a href="{{ route('index.offer')}}">Back</a>
<h1>{{ $offer->name_vacant }}</h1>
<h1>{{ $offer->description_vacant }}</h1>
<h1>{{ $offer->name_company }}</h1>
<h1>{{ $offer->address }}</h1>
<h1>{{ $offer->salary }}</h1>
<h1>{{ $offer->start_date }}</h1>
<h1>{{ $offer->end_date }}</h1>
<h1>{{ $offer->months_experience }}</h1>
<h1>{{ $offer->requirements }}</h1>
<h1>{{ $offer->id_offers }}</h1>
@endsection