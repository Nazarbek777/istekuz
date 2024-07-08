<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        'quantity',
        'height_size',
        'weight_size',
        'type',
        'seriya',
        'complect',
        'profile_color',
        'laminate_color',
        'window_type',
        'profile_type',
    ];


    protected $casts = [
        'complect' => 'array', // Ensure complect is cast as an array
    ];
}
