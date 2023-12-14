<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Functionn extends Model
{
    use HasFactory;

    protected $table = 'denominations'; 

    protected $fillable = [
        'function_description',
        'id_occupations',
        'occupation_name'
    ];
}
