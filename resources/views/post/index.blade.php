@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.post') }}" class="boton1">Create New Post</a>
    <ul>
        @forelse ($posts as $post)
        <table>
            <tr>
                <th>ID</th>
                <th>Name Post</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><a>{{ $post->id }}</a></td>
                <td><a>{{ $post->name_post }}</a></td>
                <td><a>{{ $post->description}}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.post', $post->id) }}">{{ $post->id }}</a> |
                <a href="{{ route('edit.post', $post->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.post', ['post'=>$post->id]) }}"> 
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