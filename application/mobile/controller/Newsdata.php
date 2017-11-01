<?php
namespace app\mobile\controller;
use \think\Controller;
class Newsdata extends Controller
{
    public function index()
    { 
      $that =  input('id');
      $prev_id =  $that-1;
      $next_id =  $that+1;
      $content_list = db('news')
       				->field('title,content,visited,create_time')
       				->where('id='.$that)
       				->find();

      $prev =db('news')
              ->field('id,title')
              ->where('id='.$prev_id)
              ->find();

      $last =db('news')
              ->field('id,title')
              ->where('id='.$next_id)
              ->find();

      $this->assign('content_list',$content_list);
      $this->assign('prev',$prev);
      $this->assign('last',$last);

      // print_r(input('id'));
      // echo "------------";
      // print_r($prev['id']);
      //  echo "------------";
      // print_r($last['id']);
      // exit();
      return $this->fetch();
    }
     public function elseindex()
    {
       return $this->fetch();
    }
}
