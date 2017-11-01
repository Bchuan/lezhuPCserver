<?php
namespace app\admin\model;



class Category extends \think\Model{
 
	public function getParentCate(){
		return db('category')
		->field('cate_id,cate_name,cate_parent,level')
		->where('level<3')
		->select();
	}

	public function getThirdCate(){
		return db('category')
		->field('cate_id,cate_name,cate_parent,level')
		->where('level=3')
		->select();
	}

	public function getAllCate()
	{
		return db('category')
		->field('cate_id,cate_name,cate_parent,level')
		->order('level asc')
		->select();
	}

	public function saveInfo(){
		list($cate_parent,$level) = explode("_", input('parent_level'));

		db('category')->insert([
			'cate_name'=>input('cate_name'),
			'cate_parent'=>$cate_parent,
			'level'=>++$level,
			]);
	}
}

?>