<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denomination extends Model
{
    use HasFactory;

    protected $table = 'denominations'; 

    protected $fillable = [
        'denominate_description',
        'id_occupations',
        'occupation_name'
    ];

    public function occupation()
    {
        return $this->belongsTo(Occupation::class, 'id_occupations');
    }
}
