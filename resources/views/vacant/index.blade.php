@extends('layouts.app')
@section('content')
<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('vacant.create') }}" class="boton2">Create New Vacant</a>
    <ul class="list-general">
        @forelse ($vacancies as $vacancy)
        <table class="table-general">
            <tr>
                <th class="table-header">Number Vacancies</th>
                <th class="table-header">Offer</th>
                <th class="table-header">City</th>
                <th class="table-header">Contract Type</th>
                <th class="table-header">Weighting</th>
            </tr>
            <tr>
                <td>{{ $vacancy->number_vacancies_applied }}</td>
                <td>{{ $vacancy->offer->name_vacant }}</td>
                <td>{{ $vacancy->city->city_name }}</td>
                <td>{{ $vacancy->contract_type->contract_name }}</td>
                <td>{{ $vacancy->weighings->languages }}</td>
            </tr>
        </table>
        @empty
        <p class="no-data">No data.</p>
        @endforelse
    </ul>
</div>
@endsection


