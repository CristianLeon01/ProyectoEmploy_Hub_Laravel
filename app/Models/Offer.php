<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'id_contract_types',
        'requirements',
    ];

    public function contractType()
    {
        return $this->belongsTo(Contract_type::class, 'id_contract_types');
    }

    public function postulations()
    {
        return $this->hasMany(Postulation::class, 'id_offer');
    }

    public function vacancies()
    {
        return $this->hasMany(Vacant::class);
    }
}
