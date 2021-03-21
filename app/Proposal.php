<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    //

    protected $fillable=[
        'user_id',
        'name',
        'description',
        'template_id',
        'action',
        'brand_id',
        'cover_id',
        'status',
        'contact_id',
        'company_name'









    ];



    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function template(){
        return $this->belongsTo(Template::class);
    }

    public function contact(){
        return $this->belongsTo(contact::class);
    }



}
