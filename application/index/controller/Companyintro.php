<?php
namespace app\index\controller;
use think\Controller;
class Companyintro extends Controller
{
	//首页入口
    public function index()
    {	
    	$intro_content = db('company_intro')->find();
    	$history_list = db('history')->select();

    	$this->assign('intro_content',$intro_content);
    	$this->assign('history_list',$history_list);
        return $this->fetch();
    }
}