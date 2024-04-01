@extends('layouts.app')

@section('content')

<a href="{{ route('requition')}}">Back</a>
<h1>{{ $offer->charge_description }}</h1>
<h1>{{ $offer->justification }}</h1>
<h1>{{ $offer->ideal_candidate }}</h1>
<h1>{{ $offer->mission_charge }}</h1>
<h1>{{ $offer->responsibilities }}</h1>
<h1>{{ $offer->candidate_description }}</h1>
<h1>{{ $offer->candidate_talents }}</h1>
<h1>{{ $offer->months_experience }}</h1>
<h1>{{ $offer->selection_criteria }}</h1>
<h1>{{ $offer->company_id }}</h1>
@endsection
