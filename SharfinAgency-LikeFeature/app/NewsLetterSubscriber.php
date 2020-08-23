<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsLetterSubscriber extends Model
{
    protected $table="news_letter_subscribers";
    protected $fillable=["email"];
}
