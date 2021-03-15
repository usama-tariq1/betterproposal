<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplatePage extends Model
{
    protected $fillable = [
      'template_id' , 'page_name'
    ];
}
