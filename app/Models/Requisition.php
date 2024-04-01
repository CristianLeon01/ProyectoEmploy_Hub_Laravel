<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;

    protected $table = 'requisitions';

    protected $fillable = [
        'charge_description',
        'justification',
        'ideal_candidate',
        'mission_charge',
        'responsibilities',
        'candidate_description',
        'candidate_talents',
        'selection_criteria',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
