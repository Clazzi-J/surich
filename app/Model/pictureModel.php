<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Auth;
class pictureModel extends Model
{
    protected $table = "profile_picture";

	public function user(){
		return $this->hasOne('App\Model\userModel','user_id');
	}
}
