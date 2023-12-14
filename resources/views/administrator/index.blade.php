@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('administrator.create') }}" class="boton1">Create New Administrator</a>
    <ul>
        @forelse ($administrators as $administrator)
        <table>
            <tr>
                <th>ID</th>
                <th>Document Number</th>
                <th>Document Type</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Id User Type</th>
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
                <a href="{{ route('administrator.show', $administrator->id) }}">{{ $administrator->id }}</a> |
                <a href="{{ route('administrator.edit', $administrator->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('administrator.destroy', ['administrator'=>$administrator->id]) }}"> 
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