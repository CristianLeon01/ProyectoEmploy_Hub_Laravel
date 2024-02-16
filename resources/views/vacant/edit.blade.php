@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Vacant</h2>

        <form action="{{ route('vacant.update', $vacant->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="number_vacancies_applied">Number of Vacancies Applied:</label>
                <input type="number" class="form-control" id="number_vacancies_applied" name="number_vacancies_applied" value="{{ $vacant->number_vacancies_applied }}" required>
            </div>

            <div class="form-group">
                <label for="id_offers">Offer ID:</label>
                <input type="number" class="form-control" id="id_offers" name="id_offers" value="{{ $vacant->id_offers }}" required>
            </div>

            <div class="form-group">
                <label for="id_localities">Locality ID:</label>
                <input type="number" class="form-control" id="id_localities" name="id_localities" value="{{ $vacant->id_localities }}" required>
            </div>

            <div class="form-group">
                <label for="id_contract_types">Contract Type ID:</label>
                <input type="number" class="form-control" id="id_contract_types" name="id_contract_types" value="{{ $vacant->id_contract_types }}" required>
            </div>

            <div class="form-group">
                <label for="id_weighings">Weighing ID:</label>
                <input type="number" class="form-control" id="id_weighings" name="id_weighings" value="{{ $vacant->id_weighings }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Vacant</button>
        </form>
    </div>
@endsection
