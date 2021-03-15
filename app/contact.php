<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    //

    public $timestamps = false;

    protected $fillable = [
        "user_id" ,

        "email",
        "firstname",
        "lastname"

    ];
}
