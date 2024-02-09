@extends('layouts.app')
@section('content')
    <ul class="menu-recruiter">
        <li class="contenedor-recruiter">
            <a href="#">Recruiter</a>
            <ul class="sub-Menu-recruiter">
                <li><a href="{{ route('create.company')}}">Create Company</a></li>
                <li><a href="{{ route('create.occupation')}}">Create Occupation</a></li>
                <li><a href="{{ route('create.post')}}">Create Post</a></li>
                <li><a href="{{ route('create.weighing')}}">Create Weighing</a></li>
                <li><a href="#">Register Functions Manual</a></li> 
                <li><a href="#">Register The Requisition of a position</a></li>
                <li><a href="#">Post Vacancy</a></li>
            </ul>
        </li>
    </ul>
@endsection