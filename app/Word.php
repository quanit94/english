<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{

    protected $table = 'entries';

    public static function getWordList($end){
    	$word = Word::all()->where('word', 'like', '%'.$end);
    	return $word;
    }
}
