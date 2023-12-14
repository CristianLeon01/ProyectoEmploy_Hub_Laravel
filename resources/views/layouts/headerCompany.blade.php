@extends('layouts.app')
@section('content')
    <ul class="menu-company">
        <li class="contenedor-company">
            <a href="#">Company</a>
            <ul class="sub-Menu-company">
                <li><a href="{{ route('create.company')}}">Create Company</a></li>
                <li><a href="{{ route('create.offer')}}">Create Offer</a></li>
                <li><a href="#">Applied Vacancies</a></li>
                <li><a href="#">Setting</a></li>
            </ul>
        </li>
    </ul>
@endsection