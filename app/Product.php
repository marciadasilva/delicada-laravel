<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class Product extends Model
{
    protected $fillable = [
        'user_id', 'category_id','name',
        'description', 'image', 'size',
        'color', 'price_buy', 'price_sell',
        'amount',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
