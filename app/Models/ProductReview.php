<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    //
    protected $fillable = [
        'user_id', 'product_id', 'comment', 'rate'
    ];

    public function product () {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
