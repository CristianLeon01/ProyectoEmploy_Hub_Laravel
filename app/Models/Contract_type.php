<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract_type extends Model
{
    use HasFactory;

    protected $table = 'contract_types'; 

    protected $fillable = [
        'contract_name',
        'description'
    ];

    public function offer()
    {
        return $this->belongsTo(Offer::class, 'id_contract_types');
    }
}
