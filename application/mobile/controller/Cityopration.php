<?php
namespace app\mobile\controller;
use think\Controller;
class Cityopration extends Controller
{
	//首页入口
    public function index()
    {
        return $this->fetch();
    }
}
