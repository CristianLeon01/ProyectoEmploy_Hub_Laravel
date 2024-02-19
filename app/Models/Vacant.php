<?php

namespace App\Models;

use App\Models\Weighing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function weighing()
    {
        return $this->belongsTo(Weighing::class);
    }
}
