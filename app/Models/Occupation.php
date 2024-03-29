<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    use HasFactory;

    protected $table = 'occupations';

    protected $fillable = [
        'occupation_name',
        'occupation_description',
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }


    public function denomination()
    {
        return $this->belongsTo(Denomination::class);
    }
}
