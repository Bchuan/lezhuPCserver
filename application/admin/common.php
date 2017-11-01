<?php
use think\Request;
function is_active($cur_ctr,$str)
{
    if (strstr($cur_ctr,lcfirst(Request::instance()->controller()))){
        return $str;
    }

}

function getCateTree($cateList){
	$treeList = [];
	$cate2nd;
	foreach ($cateList as $key => $value) {
		if($value['level'] == 1){
			$treeList[$value['cate_id']] = $value;
		}else if($value['level'] == 2){
			$cate2nd[$value['cate_id']] = $value['cate_parent'];
			$treeList[$value['cate_parent']]['child_menu'][$value['cate_id']] = $value;
		}else if($value['level'] == 3){
			$treeList[$cate2nd[$value['cate_parent']]]['child_menu'][$value['cate_parent']]['child_menu'][] = $value;
		}
	}

	return $treeList;
}


?>