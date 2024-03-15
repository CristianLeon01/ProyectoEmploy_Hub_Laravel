<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    use HasFactory;

    protected $table = 'abilities'; 

    protected $fillable = [
        'skill_name',
        'skill_description',
        'id_occupations',
        'occupation_name'
    ];

    public function occupation()
    {
        return $this->belongsTo(Occupation::class, 'id_occupations');
    }
}
