@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('/css/Login/login.css') }}">
    <section class="Formulario">
        <content class="login">
            <head class="user">
                <h1 class="title-login">LOGIN</h1>
            </head>
            <content class="form">
                <form action="{{ route('login.auth') }}" method="POST">
                    @csrf
                    @if(session()->has('message'))
                    <p style="color:red;">{{ session('message') }}</p>
                    @endif
                    <br />
                    <article class="username">
                        <label for="username">
                            {{-- <img src="{{ asset('img/USERNAME.png') }}" alt="Imagen" width="40px" height="40px" /> --}}
                            <input type="text" name="username" placeholder="Username" required value="{{ old('username') }}" />
                            @error('username')
                                <h5>{{ $message }}</h5>
                            @enderror
                        </label>
                    </article>
                    <br />

                    <article class="password">
                        <label for="password">
                            {{-- <img src="{{ asset('img/PASSWORD.png') }}" alt="Imagen" width="40px" height="40px" /> --}}
                            <input type="password" name="password" placeholder="Password" required value="{{ old('password') }}" />
                            @error('password')
                                <h5>{{ $message }}</h5>
                            @enderror
                        </label>
                    </article>
                    <br />
                    <article class="submit">
                            <button type="submit" name="login" placeholder="submit" value="login">Login</button>
                    </article>
                </form>
            </content>
        </content>
    </section>
@endsection
