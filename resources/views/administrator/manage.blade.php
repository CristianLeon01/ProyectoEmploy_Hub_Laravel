@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Administrators/Manage.css') }}">

<br><br>
<div class="container">
    <h2 class="TituloManage">Tabla de Usuarios Registrados</h2><br><br>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th class="Rol-th">Rol</th>
                    <th>Nombre</th>
                    <th class="Correo-th">Correo Electrónico</th>
                    <th class="Fecha-th">Fecha de Registro</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td><a class="editRole" href="{{ route('administrator.roleEdit', ['user'=>$user]) }}"><img src="img/Edit02.png" width="20px" height="20px"></a></td>
                    <td>{{$user->user_types->user_type_name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                </tr>
                @endforeach
                <!-- Aquí puedes agregar más filas según sea necesario -->
            </tbody>
        </table>
    </div>
</div>


@endsection
