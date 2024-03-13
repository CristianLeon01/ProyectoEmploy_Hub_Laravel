<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'name_post',
        'description',
    ];

    public function occupation()
    {
        return $this->belongsTo(Occupation::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'id_post');
    }
}
