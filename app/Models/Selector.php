<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selector extends Model
{
    use HasFactory;

    protected $table = 'selectors';

    protected $fillable = [
        'number_document_selector',
        'document_type_selector',
        'name_selector',
        'phone_selector',
        'email_selector',
        'id_user_types'
        
    ];
}
