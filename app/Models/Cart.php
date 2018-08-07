<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $fillable = [
        'user_id', 'total_qty', 'total_price'
    ];

    // many-to-many Relationship of carts and products
    public function products () {
        return $this->belongsToMany('App\Models\Product', 'carts_products','cart_id');
    }
}
