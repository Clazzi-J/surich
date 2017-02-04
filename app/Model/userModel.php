<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Auth;
class userModel extends Model
{
    protected $table = "users";

    public function image(){
	    return $this->hasOne('App\Model\pictureModel','user_id');
    }
}
