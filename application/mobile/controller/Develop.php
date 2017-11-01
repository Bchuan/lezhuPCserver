<?php
namespace app\mobile\controller;
use \think\Controller;
class Develop extends Controller
{
    public function index()
    {
       return $this->fetch();
    }
}
