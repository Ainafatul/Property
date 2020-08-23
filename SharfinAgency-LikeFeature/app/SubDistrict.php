<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDistrict extends Model
{
    protected $table="subdistricts";
    protected $fillable=[
      'district_id',
      'city_id',
      'province_id',
      'name',
        'postcode'
    ];
}
