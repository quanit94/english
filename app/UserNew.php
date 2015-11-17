<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNew extends Model
{

    protected $table = 'entries';

    public static function getFinal(){
    	$user = UserNew::all()->last();
    	return $user;
    }

    public static function getAll(){
    	return UserNew::get();
    }

}
