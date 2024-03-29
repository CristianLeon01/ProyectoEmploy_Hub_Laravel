<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;

    protected $table = 'knowledge'; 

    protected $fillable = [
        'knowledge_name',
        'knowledge_description',
        'id_occupations',
        'occupation_name'
    ];

    public function occupation()
    {
        return $this->belongsTo(Occupation::class, 'id_occupations');
    }
}
