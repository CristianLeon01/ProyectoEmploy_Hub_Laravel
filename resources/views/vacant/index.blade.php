@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Vacant List</h2>

        <a href="{{ route('vacant.create') }}" class="btn btn-primary">Create Vacant</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Number of Vacancies Applied</th>
                    <th>Offer ID</th>
                    <th>Locality ID</th>
                    <th>Contract Type ID</th>
                    <th>Weighing ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vacancies as $vacant)
                    <tr>
                        <td>{{ $vacant->id }}</td>
                        <td>{{ $vacant->number_vacancies_applied }}</td>
                        <td>{{ $vacant->id_offers }}</td>
                        <td>{{ $vacant->id_localities }}</td>
                        <td>{{ $vacant->id_contract_types }}</td>
                        <td>{{ $vacant->id_weighings }}</td>
                        <td>
                            <a href="{{ route('vacants.show', $vacant->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('vacants.edit', $vacant->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('vacants.destroy', $vacant->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
