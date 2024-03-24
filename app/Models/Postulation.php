<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Postulation extends Model
{
    use HasFactory;

    protected $table = 'postulations';

    protected $fillable = [
        'id_user',
        'id_offer',
    ];


    public function offer()
    {
        return $this->belongsTo(Offer::class, 'id_offer');
    }

    public function company() :BelongsTo {
        return $this->belongsTo(Company::class);
    }
}
