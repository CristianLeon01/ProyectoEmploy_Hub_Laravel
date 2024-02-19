<?php

namespace App\Models;

use App\Models\Vacant;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function vacancies(){
        return $this->hasMany(Vacant::class);
    }
}
