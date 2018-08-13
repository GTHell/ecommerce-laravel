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
        return $this->belongsToMany('App\Models\Product', 'carts_products','cart_id')
            ->withPivot('id', 'product_id', 'cart_id', 'price', 'qty');
    }

    public function user () {
        return $this->hasOne('App\Models\User', 'cart_id');
    }

    public static function findOrCreate($id)
    {
        $obj = static::find($id);
        return $obj ?: new static;
    }
}
