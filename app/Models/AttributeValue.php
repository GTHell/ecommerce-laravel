<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    //
    protected $fillable = [
        'attribute_type_id', 'value_name', 'description'
    ];

    public function categories () {
        return $this->belongsToMany('App\Category', 'categories_attributes', 'category_id');
    }
}
