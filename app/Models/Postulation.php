<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Postulation extends Model
{
    use HasFactory;

    public function offer() :BelongsTo {
        return $this->belongsTo(Offer::class);
    }

    public function company() :BelongsTo {
        return $this->belongsTo(Company::class);
    }
}
