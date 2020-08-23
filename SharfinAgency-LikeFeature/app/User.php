<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'id',
        'name',
        'birth_date',
        'gender',
        'address',
        'phone',
        'picture',
    ];
}
