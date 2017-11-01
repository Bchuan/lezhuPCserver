<?php
namespace app\mobile\controller;
use \think\Controller;
class Property extends Controller
{
    public function index()
    {
       return $this->fetch();
    }
}
