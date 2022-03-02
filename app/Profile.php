<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
    //protected $fillable=['user_id','avatar', 'about', 'facebook', 'youtube', 'linkedin','instagram', 'twitter','email', 'phone','address'];
    protected $fillable=['user_id','avatar', 'about', 'youtube', 'linkedin','instagram', 'twitter','email', 'phone','address'];
}
