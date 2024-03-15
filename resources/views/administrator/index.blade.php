@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('administrator.create') }}" class="boton2">Create New Administrator</a>
    <ul class="list-general">
        @forelse ($administrators as $administrator)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Document Number</th>
                <th class="table-header">Document Type</th>
                <th class="table-header">Name</th>
                <th class="table-header">Last Name</th>
                <th class="table-header">Email</th>
                <th class="table-header">Id User Type</th>
            </tr>
            <tr>
                <td><a>{{ $administrator->id }}</a></td>
                <td><a>{{ $administrator->document_number }}</a></td>
                <td><a>{{ $administrator->document_type}}</a></td>
                <td><a>{{ $administrator->name }}</a></td>
                <td><a>{{ $administrator->last_name }}</a></td>
                <td><a>{{ $administrator->email }}</a></td>
                <td><a>{{ $administrator->id_user_types }}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('administrator.show', $administrator->id) }}" class="link">{{ $administrator->id }}</a> |
            <a href="{{ route('administrator.edit', $administrator->id) }}" class="boton1">EDIT</a> |
            <form method="POST" action="{{ route('administrator.destroy', ['administrator'=>$administrator->id]) }}" class="delete-form"> 
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