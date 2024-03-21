<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Método para manejar la respuesta de Google después de la autenticación
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // Verifica si el usuario ya existe en la base de datos
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // Si el usuario existe, inicia sesión
            Auth::login($existingUser, true);
        } else {
            // Si el usuario no existe, créalo automáticamente
            $newUser = new User();
            $newUser->username = $user->name;
            $newUser->email = $user->email;
            //contraseña aleatoria
            $newUser->password = bcrypt(Str::random(16));
            $newUser->id_user_types = '4';
            $newUser->save();
            Auth::login($newUser, true);
        }

        return redirect('headerCandidate');
    }
}
