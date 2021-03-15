<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proposal_cache extends Model
{
    //

    public $timestamps = false;

    protected $fillable = [
        "user_id" ,

        "proposal_id",
        "contact_id" ,
        "email_title",
        "email_template",
        "status",
        "signature"

    ];



    public function proposal(){
        return $this->belongsTo(Proposal::class);
    }

    public function contact(){
        return $this->belongsTo(contact::class);
    }



}
