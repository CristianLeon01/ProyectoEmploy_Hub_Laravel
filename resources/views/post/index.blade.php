@extends('layouts.app')
@section('content')


<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.post') }}" class="boton2">Create New Post</a>
    <ul class="list-general">
        @forelse ($posts as $post)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Name Post</th>
                <th class="table-header">Description</th>
            </tr>
            <tr>
                <td><a>{{ $post->id }}</a></td>
                <td><a>{{ $post->name_post }}</a></td>
                <td><a>{{ $post->description}}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('show.post', $post->id) }}" class="link">{{ $post->id }}</a> |
            <a href="{{ route('edit.post', $post->id) }}" class="boton1">EDIT</a> |
            <form method="POST" action="{{ route('destroy.post', ['post'=>$post->id]) }}" class="delete-form"> 
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