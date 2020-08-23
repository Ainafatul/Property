<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_Update extends Model
{
    protected $table="property_updates";
    protected $fillable=[
        'id',
        'property',
        'agent',
        'category',
        'isSell',
        'isRent',
        'name',
        'bath_room',
        'bed_room',
        'stories',
        'land_area',
        'building_area',
        'location',
        'address',
        'description',
        'image',
        'main_image'
    ];
}
