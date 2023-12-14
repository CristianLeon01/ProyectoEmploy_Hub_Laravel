<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;

    protected $table = 'relations'; 

    protected $fillable = [
        'name_related_occupation',
        'id_occupations',
        'occupation_name'
    ];
}
