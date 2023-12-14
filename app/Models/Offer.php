<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offers';

    protected $fillable = [
        'name_vacant',
        'description_vacant',
        'name_company',
        'address',
        'salary',
        'start_date',
        'end_date',
        'months_experience',
        'type_contract',
        'requirements',
        'id_weightings'
    ];
}
