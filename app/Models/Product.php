<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name', 'sku', 'description', 'supplier_id', 'category_id', 'gender_type', 'unit_price'
    ];

    public function category () {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
