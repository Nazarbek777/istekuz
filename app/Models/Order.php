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
        'size_height',
        'size_weight',
        'type',
        'seriya',
        'complect',
        'profile_color',
        'laminate_color',
        'window_type',
        'sheet',
    ];
}
