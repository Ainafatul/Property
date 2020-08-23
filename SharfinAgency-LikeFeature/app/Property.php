<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table="properties";
    protected $fillable=[
            'id',
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
