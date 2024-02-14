<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = [
        'company_name',
        'legal_representative',
        'company_type',
        'NIT',
        'number_workers',
        'legal_representative_email',
        'nature',
        'email',
        'phone',
        'alternate_phone',
        'human_resources_manager',
        'phone_2',
        'alternate_phone_2',
        'email_manager',
        'id_post',
        'id_user_types'
    ];

    public function id_user_types()
    {
        return $this->belongsTo(UserType::class, 'id_user_types');
    }

    public function id_post()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }
}
