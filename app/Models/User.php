<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $table='users';
    protected $fillable = [
        'username',
        'id_user_types',
        'email',
        'password',
    ];

    public function user_types()
    {
        return $this->belongsTo(UserType::class, 'id_user_types', 'id');
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
