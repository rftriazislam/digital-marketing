<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function category_info(){
        return $this->hasOne('App\Category','id','category_id')->where('status',1);
    }
}