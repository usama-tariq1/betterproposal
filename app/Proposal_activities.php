<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal_activities extends Model
{
    //


    public $timestamps = false;

    protected $fillable = [

        "proposal_id",
        "action",


    ];


    public function proposal(){
        return $this->belongsTo(Proposal::class);
    }



}
