<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakeMoney extends Model
{
    protected $fillable = [
        'category_id', 'subcategory_id', 'description', 'status', 'updated_at'
    ];

    public function category_info()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
    public function subcategory_info()
    {
        return $this->hasOne('App\Subcategory', 'id', 'subcategory_id');
    }
}