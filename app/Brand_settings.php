<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand_settings extends Model
{
    //

    public $timestamps = false;

    protected $fillable = [
        "brand_id" ,
        "brand_email" ,
        "email_title",
        "email_message",
        "email_button",
        "thanks_title",
        "thanks_message",


    ];
}
