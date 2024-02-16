<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $table = 'administrators'; 

    protected $fillable = [
        'document_number',
        'document_type',
        'name',
        'last_name',
        'email',
        'password',
        'id_user_types',

    ];

    
    public function instructors()
    {
        return $this->hasMany(Instructor::class, 'id_administrator');
    }
}
