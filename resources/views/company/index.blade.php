@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.company') }}" class="boton1">Create New Company</a>
    <ul>
        @forelse ($companies as $company)
        <table>
            <tr>
                <th>ID</th>
                <th>Company Name</th>
                <th>Legal Representative</th>
                <th>Company Type</th>
                <th>NIT</th>
                <th>Number Workers</th>
                <th>Legal Representative Email</th>
                <th>Nature</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Alternate Phone</th>
                <th>Human Resources Manager</th>
                <th>Phone 2</th>
                <th>Alternate Phone 2</th>
                <th>Email Manager</th>

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
                <a href="{{ route('show.company', $company->id) }}">{{ $company->id }}</a> |
                <a href="{{ route('edit.company', $company->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.company', ['company'=>$company->id]) }}"> 
                    @csrf
                    @method('DELETE')
                    <input type="submit" value='DELETE' class="boton1">
                </form>
            </li>
        @empty
            <p>No data.</p>
        @endforelse
    </ul>
</div>
@endsection