@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Vacant Details</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $vacant->id }}</h5>
                <p class="card-text">Number of Vacancies Applied: {{ $vacant->number_vacancies_applied }}</p>
                <p class="card-text">Offer ID: {{ $vacant->id_offers }}</p>
                <p class="card-text">Locality ID: {{ $vacant->id_localities }}</p>
                <p class="card-text">Contract Type ID: {{ $vacant->id_contract_types }}</p>
                <p class="card-text">Weighing ID: {{ $vacant->id_weighings }}</p>
                <p class="card-text">Created At: {{ $vacant->created_at }}</p>
                <p class="card-text">Updated At: {{ $vacant->updated_at }}</p>

                <a href="{{ route('vacant.edit', $vacant->id) }}" class="btn btn-warning">Edit Vacant</a>

                <form action="{{ route('vacant.destroy', $vacant->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete Vacant</button>
                </form>
            </div>
        </div>
    </div>
@endsection
