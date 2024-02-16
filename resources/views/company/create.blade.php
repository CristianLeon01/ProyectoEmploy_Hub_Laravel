@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('../css/Companies/createCompany.css') }}">
<h1 class="tituloEmpresa">Create <span>Company</span></h1>
<form class="formulario-doble" action="{{ route('store.company') }}" method="POST">
    @csrf
    <section class="derecha">
        <h2>Business Data</h2>
        <label for="titulo">Company name</label>
        <input type="text" id="titulo" name="company_name"><br><br>

        <label for="descripcion">*Legal Representative</label><br>
        <input type="text" id="titulo" name="legal_representative" required><br><br>

        <label for="tipo_empresa">Company type</label>
        <select id="tipo_empresa" name="company_type">
            <option value="NOT_DEFINED">Not defined</option>
            <option value="LIMITED">Limited</option>
            <option value="ANONYMOUS">Anonymous</option>
            <option value="COMMAND">Command</option>
            <option value="ASSOCIATIVE COMPANY">Associative Company</option>
            <option value="SOLE PROPRIETORSHIPl">Sole Proprietorship</option>
            <option value="OTHER">Other</option>
            <option value="NATURAL PERSON">Natural person</option>
            <option value="COLLECTIVE SOCIETY">Collective society</option>
            <option value="SIMPLIFIED JOINT STOCK COMPANIES">Simplified Joint Stock Companies</option>
            <option value="LIMITED PARTNERSHIP">Limited Partnership</option>
            <option value="LIMITED PARTNERSHIP BY SHARES">Limited Partnership by Shares</option>
            <option value="RURAL COMPANY SENA EMPRENDE RURAL">Rural company SENA Emprende Rural    </option>
        </select><br><br>

        <label for="nit">NIT:</label>
        <input type="text" id=nit name="NIT"><br><br>

        <label for="trabajadores">*Number of workers</label>
        <input type="number" id="trabajadores" name="number_workers" required><br><br>

        <label for="correo">Legal representative email</label>
        <input type="text" id=correo name="legal_representative_email"><br><br>

        <label for="naturaleza">Nature</label>
        <select id="naturaleza" name="nature">
            <option value="PUBLIC">Public</option>
            <option value="PRIVATE">Private</option>
            <option value="MIXED">Mixed</option>
        </select><br><br>

    </section>
    <section class="izquierda">
        <h2>Location data</h2>

        <label for="direccion">*Email</label>
        <input type="text" id="direccion" name="email" rows="4" cols="50" required></input><br><br>

        <label for="telefono">*Phone</label>
        <input type="text" id="telefono" name="phone" required><br><br>

        <label for="telefono2">Alternate phone</label>
        <input type="text" id="telefono2" name="alternate_phone"><br><br>

        <h2>Human Resources Data</h2>

        <label for="recursos-humanos">*Human Resources Manager</label>
        <input type="text" id="recursos-humanos" name="human_resources_manager" required><br><br>

        <label for="telefono">*Phone</label>
        <input type="text" id="telefono" name="phone_2" required><br><br>

        <label for="telefono2">Alternate phone</label>
        <input type="text" id="telefono2" name="alternate_phone_2"><br><br>

        <label for="correo">*E-mail of the manager</label>
        <input type="text" id=correo name="email_manager" class="textarea1" required><br><br>

        <label for="correo">Write ID Post</label>
       <select class="id_post" name="id_post" id="id_post">
    @foreach ($id_post as $post)
        <option value="{{ $post->id }}">{{ $post->name_post }}</option>
    @endforeach
</select><br><br>

        <label for="exampleInputEmail" class="user_type">User Type Id</label>
        <select class="user_type" name="id_user_types" id="">
            @foreach ($user_types as $user_type)
            <option value="{{$user_type->id}}">{{$user_type->user_type_name}}</option>
            @endforeach
        </select>

        <center><button type="submit" class="crear-oferta-button">Create Company</button></center>

    </section>
</form>
@endsection
