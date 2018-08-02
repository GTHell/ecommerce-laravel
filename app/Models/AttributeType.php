<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeType extends Model
{
    //
    protected $fillable = [
        'name', 'description'
    ];

    public function attributeValues () {
        return $this->hasMany ('App\AttributeValue', 'attribute_type_id');
    }
}
