<?php
namespace app\index\controller;
use \think\Controller;
class Develop extends Controller
{
    public function index()
    {
       return $this->fetch();
    }
}
