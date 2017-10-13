<?php
namespace app\index\controller;
use \think\Controller;
class Property extends Controller
{
    public function index()
    {
       return $this->fetch();
    }
}
