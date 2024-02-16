@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create New Vacant</h2>

        <form action="{{ route('vacant.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="number_vacancies_applied">Number of Vacancies Applied:</label>
                <input type="number" class="form-control" id="number_vacancies_applied" name="number_vacancies_applied" required>
            </div>

            <div class="form-group">
                <label for="id_offers">Offer ID:</label>
                <input type="number" class="form-control" id="id_offers" name="id_offers" required>
            </div>

            <div class="form-group">
                <label for="id_localities">Locality ID:</label>
                <input type="number" class="form-control" id="id_localities" name="id_localities" required>
            </div>

            <div class="form-group">
                <label for="id_contract_types">Contract Type ID:</label>
                <input type="number" class="form-control" id="id_contract_types" name="id_contract_types" required>
            </div>

            <div class="form-group">
                <label for="id_weighings">Weighing ID:</label>
                <input type="number" class="form-control" id="id_weighings" name="id_weighings" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Vacant</button>
        </form>
    </div>
@endsection
