<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    //
    protected $fillable = [
        'name', 'sku', 'description', 'supplier_id', 'category_id', 'unit_price'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\ProductImage', 'product_id');
    }

    public static function getTopSelling()
    {
        $prod = DB::table('product_reviews')
            ->select(DB::raw('count(rate) as count_rate, product_id, rate, products.name, products.unit_price'))
            ->join('products', 'product_reviews.product_id', '=', 'products.id')
            ->groupBy('rate', 'product_id')
            ->orderBy('rate', 'DESC')
            ->orderBy('count_rate', 'DESC')
            ->limit(5)
            ->get();
        return $prod;
    }
}
