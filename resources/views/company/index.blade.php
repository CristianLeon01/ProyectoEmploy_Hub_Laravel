@extends('layouts.app')
@section('content')


<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.company') }}" class="boton2">Create New Company</a>
    <ul class="list-general">
        @forelse ($companies as $company)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Company Name</th>
                <th class="table-header">Legal Representative</th>
                <th class="table-header">Company Type</th>
                <th class="table-header">NIT</th>
                <th class="table-header">Number Workers</th>
                <th class="table-header">Legal Representative Email</th>
                <th class="table-header">Nature</th>
                <th class="table-header">Email</th>
                <th class="table-header">Phone</th>
                <th class="table-header">Alternate Phone</th>
                <th class="table-header">Human Resources Manager</th>
                <th class="table-header">Phone 2</th>
                <th class="table-header">Alternate Phone 2</th>
                <th class="table-header">Email Manager</th>
            </tr>
            <tr>
                <td><a>{{ $company->id }}</a></td>
                <td><a>{{ $company->company_name }}</a></td>
                <td><a>{{ $company->legal_representative}}</a></td>
                <td><a>{{ $company->company_type }}</a></td>
                <td><a>{{ $company->NIT }}</a></td>
                <td><a>{{ $company->number_workers }}</a></td>
                <td><a>{{ $company->legal_representative_email}}</a></td>
                <td><a>{{ $company->nature }}</a></td>
                <td><a>{{ $company->email }}</a></td>
                <td><a>{{ $company->phone}}</a></td>
                <td><a>{{ $company->alternate_phone }}</a></td>
                <td><a>{{ $company->human_resources_manager }}</a></td>
                <td><a>{{ $company->phone_2 }}</a></td>
                <td><a>{{ $company->alternate_phone_2}}</a></td>
                <td><a>{{ $company->email_manager}}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('show.company', $company->id) }}" class="link"> {{ $company->id }}</a> |
            <a href="{{ route('edit.company', ['company'=>$company->id]) }}" class="boton1">EDIT</a> |
            <form method="POST" action="{{ route('destroy.company', ['company'=>$company->id]) }}" class="delete-form"> 
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