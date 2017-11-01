<?php
namespace app\mobile\controller;
use think\Controller;
class Companyintro extends Controller
{
	//首页入口
    public function index()
    {
        return $this->fetch();
    }
}