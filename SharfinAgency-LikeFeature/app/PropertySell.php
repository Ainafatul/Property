<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertySell extends Model
{
    protected $table="property_sells";
    protected $fillable=["price"];
}
