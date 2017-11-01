<?php
namespace app\admin\controller;

class News extends \think\Controller
{
    public function index()
    {
        //查询列表
        $cate_list = db('news')->paginate(5);
        $this->assign('cate_list', $cate_list);

        //跳转到视图index.html
        return $this->fetch();
        
    }

    public function add()
    {   
        return $this->fetch();
    }

    public function edit()
    {   
        $info = model('news')->where('id='.input('id'))->find();
        $this->assign('info_list', $info);
        //成功跳转到index.html
        return $this->fetch();
    }

    public function update()
    {   
        db('news')->update(input());
        $this->success('更新成功', 'index');
    }          

    public function delete()
    {   
        db('news')->where("id=".input('id'))->delete();
        $this->success('删除成功', 'index');
    }    

    public function save()
    {
        model('news')->saveInfo();
        $this->success('添加成功', 'index');
    }
}
