<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table = 'instructors'; 

    protected $fillable = [
        'document_type',
        'document_number',
        'instructor_name',
        'instructor_lastname',
        'email',
        'password',
        'id_administrators'
    ];

    public function administrator()
    {
        return $this->belongsTo(Administrator::class, 'id_administrators');
    }
}
