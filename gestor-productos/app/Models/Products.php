<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    //Campos de tabla products
    protected $fillable = [
        'name',
        'desc_short',
        'desc_large',
        'price_sell',
        'price_purchase',
        'stock',
        'weight',
    ];
}