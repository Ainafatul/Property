<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyRent extends Model
{
    protected $table="property_rents";
    protected $fillable=[
        'price',
        'minRent',
        'timeType'
    ];
}
