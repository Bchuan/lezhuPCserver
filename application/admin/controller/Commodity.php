<?php
namespace app\admin\controller;

class Commodity extends \think\Controller
{
    public function index()
    {
        //查询列表
        $cmd_list = model('commodity')->getList();

        $this->assign('cmd_list', $cmd_list);

        //查询分类
        $cate_list = model('Category')->getAllCate();

        //得到分类树
        $cate_list = getCateTree($cate_list);

        $this->assign('cate_list', $cate_list);

        //跳转到视图index.html
        return $this->fetch();
        
    }

    public function add()
    {
        //查询3级分类
        $cate_list = model('Category')->getThirdCate();

        $this->assign('cate_list', $cate_list);
        //跳转到视图add.html
        return $this->fetch();
    }

    public function save()
    {
        model('Commodity')->saveInfo();
        //成功跳转到index.html
        $this->success('添加成功', 'index');
    }

    public function edit()
    {
        $info = db('commodity')->where("cmd_id=".input('cmd_id'))->find();
        $this->assign('info', $info);

        $cate_list = model('Category')->getThirdCate();

        $this->assign('cate_list', $cate_list);
        //成功跳转到edit.html
        return $this->fetch();
    }

    public function update()
    {
        db('commodity')->update(input());
        //成功跳转到index.html
        $this->success('修改成功', 'index');
    }
}
