<?php
namespace app\mobile\controller;
use \think\Controller;
class Newslist extends Controller
{
    public function index()
    {
        if(empty(input('cur_page'))){
          $pageid=1;
        }else{
          $pageid=input('cur_page');
        }
        
        
    	//轮播
        $swiper_list = db('news')
       					->field('id,title,short_content,create_time')
       					->limit(3)
       					->select(); 

       	//新闻列表（一页）
		    $news_list = db('news')
       					->field('id,title,short_content,create_time')
       					->page($pageid,10)
       					->order('id desc')
       					->select();
        
        //获取所有新闻的总数
        $tol_list = db('news')->count();

        //新闻总数
        $content_list = db('news')
                ->field('id')
                ->select(); 
       

		    //get page
        $cur_page = input('cur_page')==null?1:input('cur_page');
        $page_list=[];
        for ($i=1; $i <= ceil(count($content_list)/10); $i++) { 
          $page_list[$i]=$i;
        }

        $pages = array('tol_page' => ceil(count($content_list)/10),'cur_page' => $cur_page,'page_list' => $page_list);
       
        $this->assign("swiper_list",$swiper_list);
       	$this->assign("news_list",$news_list);
       	$this->assign("tol_list",$tol_list);
 		    $this->assign('pages', $pages);
					
        return $this->fetch();
    }
}
