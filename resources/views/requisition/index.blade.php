@extends('layouts.app')
@section('content')


<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.requisition') }}" class="boton2">Create New Weighing</a>
    <ul class="list-general">
        @forelse ($requisitions as $requisition)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Charge Description</th>
                <th class="table-header">Justification</th>
                <th class="table-header">Ideal candidate</th>
                <th class="table-header">Mission charge</th>
                <th class="table-header">Responsibilities</th>
                <th class="table-header">Candidate Description</th>
                <th class="table-header">Candidate Talentse</th>
                <th class="table-header">Selection Criteria</th>
                <th class="table-header">Company ID</th>

            </tr>
            <tr>
                <td><a>{{ $requisition->id }}</a></td>
                <td><a>{{ $requisition->charge_description }}</a></td>
                <td><a>{{ $requisition->justification}}</a></td>
                <td><a>{{ $requisition->ideal_candidate }}</a></td>
                <td><a>{{ $requisition->mission_charge }}</a></td>
                <td><a>{{ $requisition->responsibilities}}</a></td>
                <td><a>{{ $requisition->candidate_description}}</a></td>
                <td><a>{{ $requisition->candidate_talents }}</a></td>
                <td><a>{{ $requisition->selection_criteria }}</a></td>
                <td><a>{{ $requisition->company_id }}</a></td>
            </tr>
        </table>
            <li class="list-element">
                <a href="{{ route('show.requisition', $requisition->id) }}" class="link">{{ $requisition->id }}</a> |
                <a href="{{ route('edit.requisition', $requisition->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.requisition', ['requisition'=>$requisition->id]) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value='DELETE' class="boton1">
                </form>
            </li>
        @empty
            <p class="no-data">No data.</p>
        @endforelse
    </ul>
</div>
@endsection
