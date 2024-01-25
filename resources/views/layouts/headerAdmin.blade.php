@extends('layouts.app')
@section('content')
    <ul class="menu-admin">
        <li class="contenedor-admin">
            <a class="btnAdmin" href="#">Admin</a>
            <ul class="sub-Menu-admin">
                <li><a href="{{ route('create.instructor') }}">Register Instructors</a></li>
                <li><a href="">Assign Role</a></li>
                <li><a href="#">Change Role</a></li>
                <li><a href="{{ route('instructor') }}">Delete instructor Role</a></li>
            </ul>
        </li>    
    </ul>
@endsection