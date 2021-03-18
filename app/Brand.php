<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //

    public $timestamps = false;

    protected $fillable = [
        "language" ,
        "brand_name" ,
        "company_name" ,
        "default_brand" ,
        "user_id",
        "currency",
        "strength"
    ];


    public  function brand_settings(){
        return $this->hasOne(Brand_settings::class);
    }
}
