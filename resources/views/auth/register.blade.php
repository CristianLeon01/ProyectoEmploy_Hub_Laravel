@extends('layouts.app')

@section('content')
    <section class="Formulario">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <content class="SIGNUP">
            <link rel="stylesheet" href="{{ asset('/css/Register/register.css') }}">
            <head class="user">
                <h1>SIGN IN</h1>
            </head>
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <article class="username">
                        <label for="username">
                            {{-- <img src="{{ asset('Img/USERNAME.png') }}" alt="Imagen" width="40px" height="40px" /> --}}
                            <input type="text" name="username" placeholder="Username" required value="{{ old('username') }}"/>
                        </label>
                    </article>
                    <br>
                    <article class="user_type">
                        {{-- <img src="{{ asset('Img/user-type.png') }}" alt="Imagen" width="30px" height="30px" />| User Type --}} UserType
                        <label for="exampleInputEmail" class="user_type" ></label>
                        <select class="user_type" name="id_user_types" id="">
                        @foreach ($user_types as $user_type)
                        <option value="{{$user_type->id}}">{{$user_type->user_type_name}}</option>
                        @endforeach
                        </select>
                    </article>
                    <br>

                    <article class="email">
                        <label for="email">
                            {{-- <img src="{{ asset('Img/email-icon.png') }}" alt="Imagen" width="30px" height="30px" /> --}}
                            <input type="email" name="email" placeholder="email" required value="{{ old('email') }}">
                        </label>
                    </article>
                    <br>

                    <article class="password">
                        <label for="password">
                            {{-- <img src="{{ asset('Img/PASSWORD.png') }}" alt="Imagen" width="40px" height="40px" /> --}}
                            <input type="password" name="password" placeholder="password" required value="{{ old('password') }}"/>
                        </label>
                    </article>

                    <br />

                    <article class="submit">
                            <button type="submit" name="submit" placeholder="submit" value="ENVIAR">Sign Up</button>
                    </article>
                </form>
            </content>
        </content>
    </section>
@endsection
