<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [ 'group_name' ];

    public function options () {
        return $this->hasMany('App\Models\ProductOptions', 'group_id');
    }
}
