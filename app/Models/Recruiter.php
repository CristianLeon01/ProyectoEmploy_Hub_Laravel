<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;

    protected $table = 'recruiters';

    protected $fillable = [
        'number_document',
        'document_type',
        'name',
        'phone',
        'email',
        'id_user_types'
        
    ];
}
