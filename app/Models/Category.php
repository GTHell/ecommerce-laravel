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

    public function parent () {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function children () {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }
}
