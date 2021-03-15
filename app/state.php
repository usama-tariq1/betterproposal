<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    //





    public function country()
    {
        return $this->belongsTo(country::class);
    }
}
