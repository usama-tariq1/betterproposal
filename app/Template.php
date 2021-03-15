<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable=[
        'user_id',
        'name',
        'description',
        'config',
        'preview',
        'code',
        'editable'



    ];



    public function user(){
        return $this->belongsTo(User::class );
    }
}
