<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$admin = [
    			'username' => 'quanit94-',
        		'password' => '123456',
        		'level'	   => '0'
    		];
        for($i = 1; $i< 10;$i++){
        	$data[] = [
        		'username' => 'quanit94-'.$i,
        		'password' => '123456',
        		'level'	   => '1'
        		];
        }
        DB::table('user')->insert($admin);
        DB::table('user')->insert($data);
    }
}
