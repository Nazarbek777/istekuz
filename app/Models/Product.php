<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name_uz',
        'name_ru',
        'name_en',
        'price',
        'description_uz',
        'description_ru',
        'description_en',
        'image',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
