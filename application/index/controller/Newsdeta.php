<?php
namespace app\index\controller;
use \think\Controller;
class Newsdeta extends Controller
{
    public function index()
    {
       return $this->fetch();
    }
     public function elseindex()
    {
       return $this->fetch();
    }
}
