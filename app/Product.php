<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'description',
        'size', 'color', 'price',
        'amount', 'id_category', 'image',
    ];
}
