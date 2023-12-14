<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacant extends Model
{
    use HasFactory;

    protected $table = 'vacancies';

    protected $fillable = [
        'number_vacancies_applied',
        'id_offers',
        'id_localities',
        'id_contract_types',
        'id_weightings'
    ];
}
