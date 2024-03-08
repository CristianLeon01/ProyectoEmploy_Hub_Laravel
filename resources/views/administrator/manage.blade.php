@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Administrators/Manage.css') }}">

<br><br>
<div class="container">
    <h2 class="TituloManage">Registered Users Table</h2><br><br>

    <div class="table-wrapper">
        <button class="CambiarBoton">Change</button>
        <table>
            <thead>
                <tr>
                    <th class="Rol-th">Rol</th>
                    <th>Nombre</th>
                    <th class="Correo-th">Correo Electrónico</th>
                    <th class="Fecha-th">Fecha de Registro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Instructor</td>
                    <td>Juan Pérez</td>
                    <td>juan@example.com</td>
                    <td>2024-02-19</td>
                </tr>
                <tr>
                    <td>Reclutador</td>
                    <td>María García</td>
                    <td>maria@example.com</td>
                    <td>2024-02-18</td>
                </tr>
                <!-- Aquí puedes agregar más filas según sea necesario -->
            </tbody>
        </table>
    </div>
</div>


@endsection