<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name', 'parent_id'
    ];

    public function attributes () {
        return $this->belongsToMany('App\AttributeValue', 'categories_attributes', 'attribute_value_id');
    }
}
