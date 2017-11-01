<?php
namespace app\admin\model;



class Intro extends \think\Model{

	public function saveInfo(){

		db('history')->insert([
			'time_year'=>input('time_year'),
			'content'=>input('content')
			]);
	}
}

?>