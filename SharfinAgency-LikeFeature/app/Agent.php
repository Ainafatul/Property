<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table="agents";
    protected $fillable=[
        'id',
        'agency',
        'job',
        'name',
        'birth_date',
        'gender',
        'address',
        'phone',
        'picture',
        'approve'
    ];
}
