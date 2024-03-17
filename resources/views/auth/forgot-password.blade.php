<link rel="stylesheet" href="{{ asset('css/Forgot-Password/forgotPassword.css') }}">
<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="card">
        <img class="imagen" src="{{ asset('img/Logo_EmplyHub.png') }}" alt="Logo de EmployHub">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
        @error('email')
            <span>{{ $message }}</span>
        @enderror

        <div>
            <button type="submit">
                Send Password Reset Link
            </button>
        </div>
    </div>
</form>