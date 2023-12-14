<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $table = 'candidates';

    protected $fillable = [
        'number_document',
        'document_type',
        'name',
        'phone',
        'email',
        'id_life_sheet',
        'id_state'
        
    ];
}
