<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{

    protected $fillable = [
        'category_id', 'subcategory_id', 'social_name',
        'social_link', 'friend_follower', 'sell_price', 'description', 'status', 'updated_at'
    ];
    public function user_info()
    {
        return $this->hasOne('App\User', 'id', 'user_post_id');
    }
    public function category_info()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
    public function subcategory_info()
    {
        return $this->hasOne('App\Subcategory', 'id', 'subcategory_id');
    }
}