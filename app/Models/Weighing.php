<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weighing extends Model
{
    use HasFactory;

    protected $table = 'weighings';

    protected $fillable = [

        'languages',
        'education',
        'work_experience',
        'technical_skills',
        'previous_project',
        'references',
        'additional_course',
        'id_weightings'
    ];
}
