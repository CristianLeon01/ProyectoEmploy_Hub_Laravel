@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('../css/Companies/editCompanies.css') }}">
    <h1 class="tituloEmpresa">Update <span>Company</span></h1>
    <form class="formulario-doble" action="{{ route('update.company', ['company'=>$company->id]) }}"  method="POST">
        @method('PUT')
        @csrf
        <section class="derecha">
            <h2>Business Data</h2>
            <label for="titulo">Update your Company name</label>
            <input type="text" id="titulo" name="company_name" value="{{ $company-> company_name }}"><br><br>
            @error('company_name')
            <span>{{$message}}</span>
                
            @enderror

            <label for="descripcion">*Update your Legal Representative</label><br>
            <input type="text" id="titulo" name="legal_representative" value="{{$company-> legal_representative }}"><br><br>
            @error('legal_representative')
            <span>{{$message}}</span>
                
            @enderror

            <label for="tipo_empresa">Update your Company type</label>
            <select id="tipo_empresa" name="company_type" value="{{ $company-> company_type}}">
                
                <option value="NOT_DEFINED">Not defined</option>
                <option value="LIMITED">Limited</option>
                <option value="ANONYMOUS">Anonymous</option>
                <option value="COMMAND">Command</option>
                <option value="ASSOCIATIVE COMPANY">Associative Company</option>
                <option value="SOLE PROPRIETORSHIP">Sole Proprietorship</option>
                <option value="OTHER">Other</option>
                <option value="NATURAL PERSON">Natural person</option>
                <option value="COLLECTIVE SOCIETY">Collective society</option>
                <option value="SIMPLIFIED JOINT STOCK COMPANIES">Simplified Joint Stock Companies</option>
                <option value="LIMITED PARTNERSHIP">Limited Partnership</option>
                <option value="LIMITED PARTNERSHIP BY SHARES">Limited Partnership by Shares</option>
                <option value="RURAL COMPANY SENA EMPRENDE RURAL">Rural company SENA Emprende Rural    </option>
            </select><br><br>

            <label for="nit">Update your NIT:</label>
            <input type="text" id=nit name="NIT" value="{{ $company-> NIT }}"><br><br>
            @error('NIT')
            <span>{{$message}}</span>
                
            @enderror

            <label for="trabajadores">*Update your Number of workers</label>
            <input type="number" id="trabajadores" name="number_workers" value="{{ $company-> number_workers }}" required><br><br>
            @error('number_workers')
            <span>{{$message}}</span>
                
            @enderror
            
            <label for="correo">Update your Legal representative email</label>
            <input type="text" id=correo name="legal_representative_email" value="{{ $company-> legal_representative_email }}"><br><br>
            @error('legal_representative_email')
            <span>{{$message}}</span>
                
            @enderror

            <label for="naturaleza">Update your Nature</label>
            <select id="naturaleza" name="nature" value="{{ $company-> nature }}">
                <option value="PUBLIC">Public</option>
                <option value="PRIVATE">Private</option>
                <option value="MIXED">Mixed</option>
            </select><br><br>
        </section>
        <section class="izquierda">
            <h2>Location data</h2>
            <label for="email">*Update your Email</label>
            <input id="email" name="email" type="email" value="{{ $company-> email }}" required></input><br><br>
            @error('email')
            <span>{{$message}}</span>
                
            @enderror

            <label for="telefono">*Update your Phone</label>
            <input type="text" id="telefono" name="phone" required value="{{ $company-> phone }}"><br><br>
            @error('phone')
            <span>{{$message}}</span>
                
            @enderror

        
            <label for="telefono2">Update your Alternate phone</label>
            <input type="text" id="telefono2" name="alternate_phone" value="{{ $company-> alternate_phone }}"><br><br>
            @error('alternate_phone')
            <span>{{$message}}</span>
                
            @enderror

            <h2>Human Resources Data</h2>
            
            <label for="recursos-humanos">*Update your Human Resources Manager</label>
            <input type="text" id="recursos-humanos" name="human_resources_manager" required value="{{ $company-> human_resources_manager }}"><br><br>
            @error('human_resources_manager')
            <span>{{$message}}</span>
                
            @enderror

            <label for="telefono">*Update your Phone</label>
            <input type="text" id="telefono" name="phone_2" required value="{{ $company-> phone_2 }}"><br><br>
            @error('phone_2')
            <span>{{$message}}</span>
                
            @enderror

        
            <label for="telefono2">Update your Alternate phone</label>
            <input type="text" id="telefono2" name="alternate_phone_2" value="{{ $company-> alternate_phone_2 }}"><br><br>
            @error('alternate_phone_2')
            <span>{{$message}}</span>
                
            @enderror

            <label for="correo">*Update your E-mail of the manager</label>
            <input type="text" id=correo name="email_manager" class="textarea1" required value="{{ $company-> email_manager }}"><br><br>
            @error('email_manager')
            <span>{{$message}}</span>
                
            @enderror

            <input type="hidden" name="id_user_types" value="{{ $company->id_user_types }}">
            <input type="hidden" name="id_post" value="{{ $company->id_post }}">
            
            <center><button type="submit" class="crear-oferta-button" value="Update">Update</button></center>
        </section>
    </form>
@endsection