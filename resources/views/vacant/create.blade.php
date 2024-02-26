@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Vacants/createVacant.css') }}">

<section class="create">
    <h1 class="title-vacant">Create Your <span>Vacant</span></h1>
    <form class="form-vacant" action="{{ route('vacant.store') }}" method="POST">
        @csrf

        <label for="">number of vacancies: </label>
        <input type="text" name="number_vacancies_applied">

        <label class="form-label">name vacant</label>
        <select id="id_offers" name="id_offers" id="">
            @foreach ($offers as $offer)
                <option value="{{ $offer->id }}">{{ $offer->name_vacant }}</option>
            @endforeach
        </select>

        <label for="" class="form-label">location name</label>
        <select name="id_localities" id="id_localities">
            @foreach ($localities as $location)
                <option value="{{ $location->id }}">{{ $location->location_name }}</option>
            @endforeach
        </select>

        <label for="" class="form-label">contract_type</label>
        <select name="id_contract_types" id="id_contract_types">
            @foreach ($contract_types as $contract_type)
                <option value="{{ $contract_type->id }}">{{ $contract_type->contract_name }}</option>
            @endforeach
        </select>

        <label for="" class="form-label">weighting</label>
        <select name="weighings_id" id="weighings_id">
            @foreach ($weightings as $weighting)
                <option value="{{ $weighting->id }}">{{ $weighting->languages }}</option>
            @endforeach
        </select>

        <center> <button type="submit" class="create-application-button">Create</button></center>

    </form>
    @endsection
</section>
