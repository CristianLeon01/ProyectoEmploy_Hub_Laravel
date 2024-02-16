<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LifeSheet extends Model
{
    use HasFactory;

    protected $table = 'life_sheets';

    protected $fillable = [
        'personal_description',
        'languages',
        'experience',
        'education',
    ];

    public function candidates()
    {
        return $this->belongsTo(Candidate::class, 'id_life_sheet');
    }
}
