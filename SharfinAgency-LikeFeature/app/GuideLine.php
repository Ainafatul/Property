<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuideLine extends Model
{
    protected $table="guide_lines";
    protected $fillable=["author","title","content","image"];
}
