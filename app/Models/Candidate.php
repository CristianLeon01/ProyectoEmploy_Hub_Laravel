<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $table = 'candidates';

    protected $fillable = [
        'number_document',
        'document_type',
        'name',
        'phone',
        'email',
        'id_life_sheet',
        'id_state'
        
    ];

    public function id_Post(){
        return $this->belongsTo(Post::class);
    }

    public function userType()
    {
        return $this->belongsTo(UserType::class, 'id_user_type');
    }

    public function lifeSheet()
    {
        return $this->belongsTo(LifeSheet::class, 'id_life_sheet');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'id_state');
    }
}
