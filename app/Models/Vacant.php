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

    public function offer()
    {
        return $this->belongsTo(Offer::class, 'id_offers');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'id_localities');
    }

    public function contract_type()
    {
        return $this->belongsTo(Contract_type::class, 'id_contract_types');
    }

    public function weighting()
    {
        return $this->belongsTo(Weighing::class, 'id_weightings');
    }
}
