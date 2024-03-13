@extends('layouts.app')

@section('content')
    <section class="box">
        <h1>Mi <span>Cuenta</span></h1><br>
        <section class="Cabeza">
            <section class="Perfil">
                <section class="Imagen-Descripcion">
                    <section class="imagen-perfil">
                        <img src="{{ asset('img/Mi cuenta.jpg') }}" alt="Imagen de perfil">
                    </section>
                    <section class="descripcion">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod erat non nisi malesuada. Lorem ipsum dolor sit amet consectetur adipisicing elit. A, pariatur culpa veritatis.adipisicing elit. A, pariatur culpa veritatis.</p>
                    </section>
                </section>
                <section class="mis-habilidades">
                    <section class="habilidades">
                        <button class="habilidad">Habilidad 1</button>
                        <button class="habilidad">Habilidad 2</button>
                        <button class="habilidad">Habilidad 3</button>
                    </section>
                </section>
            </section>
            
            <section class="container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Empresa</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Final</th>
                            <th>Telefono</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Carlos</td>
                            <td>Torres Paredes</td>
                            <td>23</td>
                            <td>34534624</td>
                        </tr>
                    </tbody>
                </table>
            </section>      
        </section>
    </section>
@endsection
