@extends('layouts.app')
@section('content')
<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('vacant.create') }}" class="boton2">Create New Vacant</a>
    <ul class="list-general">
        <table class="table-general">
            <tr>
                <th class="table-header">Number Vacancies</th>
                <th class="table-header">Offer</th>
                <th class="table-header">Location</th>
                <th class="table-header">Contract Type</th>
                <th class="table-header">Weighting</th>
            </tr>
            @foreach ($vacancies as $vacancy)
            <tr>
                <td>{{ $vacancy->number_vacancies_applied }}</td>
                <td>{{ $vacancy->offer->name_vacant }}</td>
                <td>{{ $vacancy->location->location_name }}</td>
                <td>{{ $vacancy->contract_type->contract_name }}</td>
                <td>{{ $vacancy->weighings->languages }}</td>
            </tr>
            @endforeach
        </table>
    </ul>
</div>
@endsection


