<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_account extends Model
{
    //


    public $timestamps = false;

    protected $fillable = [
        "user_id" ,
        "payment_status",
        "account_status"



    ];

    public function user(){
        return $this->belongsTo(User::class );
    }
}
