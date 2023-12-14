@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.selector') }}" class="boton1">Create New Selector</a>
    <ul>
        @forelse ($selectors as $selector)
        <table>
            <tr>
                <th>ID</th>
                <th>Number Document</th>
                <th>Document Type</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
            <tr>
                <td><a>{{ $selector->id }}</a></td>
                <td><a>{{ $selector->number_document_selector }}</a></td>
                <td><a>{{ $selector->document_type_selector}}</a></td>
                <td><a>{{ $selector->name_selector }}</a></td>
                <td><a>{{ $selector->phone_selector }}</a></td>
                <td><a>{{ $selector->email_selector }}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.selector', $selector->id) }}">{{ $selector->id }}</a> |
                <a href="{{ route('edit.selector', $selector->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.selector', ['selector'=>$selector->id]) }}"> 
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