@extends('layouts.app')
@section('content')


<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.selector') }}" class="boton2">Create New Selector</a>
    <ul class="list-general">
        @forelse ($selectors as $selector)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Number Document</th>
                <th class="table-header">Document Type</th>
                <th class="table-header">Name</th>
                <th class="table-header">Phone</th>
                <th class="table-header">Email</th>
            </tr>
            <tr>
                <td><a>{{ $selector->id }}</a></td>
                <td><a>{{ $selector->number_document_selector }}</a></td>
                <td><a>{{ $selector->document_type_selector }}</a></td>
                <td><a>{{ $selector->name_selector }}</a></td>
                <td><a>{{ $selector->phone_selector }}</a></td>
                <td><a>{{ $selector->email_selector }}</a></td>
            </tr>
        </table>
            <li class="list-element">
                <a href="{{ route('show.selector', $selector->id) }}" class="link">{{ $selector->id }}</a> |
                <a href="{{ route('edit.selector', $selector->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.selector', ['selector'=>$selector->id]) }}"> 
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