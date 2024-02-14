<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'states';

    protected $fillable = [
        'state_name',
        'status_description'
    ];

    public function candidates()
    {
        return $this->belongsTo(Candidate::class, 'id_state');
    }
}
