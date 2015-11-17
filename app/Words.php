<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Words extends Model
{
    protected $table = 'entries';

    public static function getWordList($end){
    	$word = Words::all()->where('word', 'like', '%'.$end);
    	return $word;
    }
}
