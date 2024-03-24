@extends('layouts.app')
@section('content')
    <ul class="menu-selector">
        <li class="contenedor-selector">
            <ul class="sub-Menu-selector">
                <li><a href="">Consult Selection Process</a></li>
                <li><a href="">Consult list of selected</a></li>
                <li><a href="">Quote candidates</a></li>
                <li><a href="">Record result of the selection process</a></li>
                <li><a href="{{ route('viewStatus') }}">Change Status</a></li>
            </ul>
        </li>
    </ul>
@endsection
{{-- El problema esta en Layouts.css ya que aqui en la clase .sub-Menu-selector el display none esta generando error a la hora de intentar oprimir algun link, toca buscarlo por la ruta http://127.0.0.1:8000/viewStatus --}}
