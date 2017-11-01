<?php
namespace app\admin\model;



class News extends \think\Model{

	public function saveInfo(){

		db('news')->insert([
			'title'=>input('news_title'),
			'short_content'=>input('short_content'),
			'content'=>input('news_content'),
			'create_time'=>time()
			]);
	}
}

?>