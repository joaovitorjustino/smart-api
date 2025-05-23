<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'client_name',
        'product_name',
        'quantity',
        'product_price',
        'total',
    ];
}
