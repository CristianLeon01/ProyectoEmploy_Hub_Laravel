@extends('layouts.app')
@section('content')
    <h1>create vacancy</h1>
    <form action="{{ route('vacant.store') }}" method="POST">
        @csrf

        <label for="">number of vacancies</label>
        <input type="text" name="number_vacancies_applied">

        <label for="">name vacant</label>
        <select name="id_offers" id="">
            @foreach ($offers as $offer)
                <option value="{{ $offer->id }}">{{ $offer->name_vacant }}</option>
            @endforeach
        </select>

        <label for="">location name</label>
        <select name="location_name" id="">
            @foreach ($localities as $location)
                <option value="{{ $location->id }}">{{ $location->location_name }}</option>
            @endforeach
        </select>

        <label for="">contract_type</label>
        <select name="contract_type" id="">
            @foreach ($contract_types as $contract_type)
                <option value="{{ $contract_type->id }}">{{ $contract_type->contract_name }}</option>
            @endforeach
        </select>

        <label for="">weighting</label>
        <select name="weighting" id="">
            @foreach ($weightings as $weighting)
                <option value="{{ $weighting->id }}">{{ $weighting->languajes }}</option>
            @endforeach
        </select>

        <button type="submit">Create</button>

    </form>
@endsection
