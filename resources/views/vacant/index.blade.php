@extends('layouts.app')
@section('content')
    <h1>list of vacancies</h1>
    <table>
        <thead>
            <tr>
                <th>Number vacancies</th>
                <th>Offer</th>
                <th>Location</th>
                <th>Contract_type</th>
                <th>Weighting</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vacancies as $vacancy)
                <tr>
                    <td>{{$vacancy->number_vacancies_applied}}</td>
                    <td>{{$vacancy->offer->name_vacant}}</td>
                    <td>{{$vacancy->location->location_name}}</td>
                    <td>{{$vacancy->contract_type->contract_name}}</td>
                     <td>{{ optional($vacancy->weighting)->languajes }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
