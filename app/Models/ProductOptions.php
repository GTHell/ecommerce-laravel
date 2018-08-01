<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOptions extends Model
{
    //
    protected $fillable = [ 'group_id', 'option_name' ];

    public function group()
    {
        return $this->belongsTo('App\Models\Product', 'group_id');
    }
}
