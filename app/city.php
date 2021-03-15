<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class city extends Model
{
    //



    public function state()
    {
        return $this->belongsTo(State::class);
    }



}
