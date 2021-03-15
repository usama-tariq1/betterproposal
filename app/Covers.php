<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covers extends Model
{
    //

    public $timestamps = false;

    protected $fillable = [
        "user_id" ,

        "name" ,
        "cover_from",
        "cover_to",
        "cover_for",
        "cover"


    ];

    public function user(){
        return $this->belongsTo(User::class );
    }
}
