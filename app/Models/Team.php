<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;


    protected $fillable = [
        'full_name',
        'job',
        'skill',
        'image',
        'experience',
        'facebook_link',
        'instagram_link',
        'telegram_link',
        'YouTube_link',
        'description_uz',
        'description_ru',
        'description_en',
    ];
}
