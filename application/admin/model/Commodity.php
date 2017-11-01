<?php
namespace app\admin\model;



class Commodity extends \think\Model{
 	
 	public function saveInfo(){
		db('commodity')->insert([
			'cmd_name'=>input('cmd_name'),
			'cmd_cate'=>input('cmd_cate'),
			'cmd_content'=>input('cmd_content')
			]);
	}

	public function getList()
	{
		$cateId = input('cate_id')!=null?intval(input('cate_id')):0;
		$where = '';
		if($cateId){
			$cateItem = db('category')->field('cate_name,cate_id,level')->where("cate_id=$cateId")->find();
			if($cateItem['level'] == 3){
				$where = "cmd.cmd_cate=$cateId";
			}else if($cateItem['level'] == 2){
				$where = "cate.cate_parent=$cateId";
			}else if($cateItem['level'] == 1){
				$cate2nd = db('category')->field('cate_id')->where("cate_parent=$cateId")->select();
				$cate2ndArr = [];
				foreach ($cate2nd as $key => $value) {
					$cate2ndArr[] = $value['cate_id'];
				}
				$where = "cate.cate_parent in(".implode(",", $cate2ndArr).")";
			}
		}

		return db('commodity')
		->alias('cmd')
		->field('cmd.cmd_id,cmd.cmd_name,cate.cate_name')
		->join('category cate', 'cmd.cmd_cate=cate.cate_id')
		->where($where)
		->order('cmd_id', 'desc')
		->paginate(5);
	}
	
}

?>