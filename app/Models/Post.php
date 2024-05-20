<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'content_ru',
        'content_uz',
        'content_en',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
