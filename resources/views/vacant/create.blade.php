@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Vacants/createVacant.css') }}">

<section class="create">
    <h1 class="title-vacant">Update Your <span>Vacant</span></h1>
    <form class="form-vacant" action="{{ route('vacant.store') }}" method="POST">
        @csrf

        <label for="">Number of vacancies: </label>
        <input type="text" name="number_vacancies_applied">

        <label class="form-label">Name vacant</label>
        <select id="id_offers" name="id_offers" id="">
            @foreach ($offers as $offer)
                <option value="{{ $offer->id }}">{{ $offer->name_vacant }}</option>
            @endforeach
        </select>

        <label for="" class="form-label">City name</label>
        <select name="city_id" id="city_id">
            @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->city_name }}</option>
            @endforeach
        </select>

        <label for="" class="form-label">Contract_type</label>
        <select name="id_contract_types" id="id_contract_types">
            @foreach ($contract_types as $contract_type)
                <option value="{{ $contract_type->id }}">{{ $contract_type->contract_name }}</option>
            @endforeach
        </select>

        <label for="" class="form-label">Weighting</label>
        <select name="weighings_id" id="weighings_id">
            @foreach ($weightings as $weighting)
                <option value="{{ $weighting->id }}">{{ $weighting->languages }}</option>
            @endforeach
        </select>

        <center> <button type="submit" class="create-application-button">Create</button></center>

    </form>
    @endsection
</section>
