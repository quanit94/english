<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Input;
use App\Words as Words;
use Illuminate\Http\Request;
use DB;

/**
* 
*/
class IndexController extends Controller
{
	
	public function index()
	{
		echo "ĐÂY LÀ TRANG CHỦ!";
	}
	public function getFirst(){
		$profile = [
            'name' => 'Do Tuan Anh',
            'school'    =>  'Viet Nam Natinal University',
            'age'       =>  '21',
        ];
        return response()->json($profile, 200);
	}

	public function getFinal(){
		$user = UserNew::getFinal();
		return response()->json($user, 200);
	}

	public function getAll(){
		$user = UserNew::getAll();
		// echo "<pre>";
		// 	var_dump($user);
		// echo "</pre>";
		return response()->json($user, 200);
	}


	public function getFinalData(){
		return view('api.dataFinal');
	}

	public function getOther(){
		return view('api.other');
	}

	public function getAllData(){
		return view('api.dataAll');
	}

	public function postSearchWord(Request $request){
		$keyword = $request->input('keyword');
		$word = DB::table('entries')->where('word', 'like', '%'.$keyword)->groupby('word')->get();
		// $word = Words::getWordList($keyword)->getFirst();
		// echo "<pre>";
		// 	var_dump($word->get());
		// echo "</pre>";
		return view('result')->with('word', $word)->with('keyword',$keyword);
	}

}