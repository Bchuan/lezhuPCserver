<?php
namespace app\admin\controller;

class Intro extends \think\Controller
{
    public function index()
    {
        //查询列表
        $cate_list = db('history')->paginate(5);
        $this->assign('cate_list', $cate_list);

        //跳转到视图index.html
        return $this->fetch();
    }

    public function add()
    {   
        return $this->fetch();
    }

    public function edit_company()
    {   
        $info = db('company_intro')->find();
        $this->assign('info', $info);
        //成功跳转到index.html
        return $this->fetch();
    }

    public function edit_year()
    {   
        $info = db('history')->where('id='.input('id'))->find();
        $this->assign('info_list', $info);
        //成功跳转到index.html
        return $this->fetch();
    }

    public function update()
    {   
        db('history')->update(input());
        $this->success('更新成功', 'index');
    }  

    public function update_ci()
    {   
        db('company_intro')->update(input());
        $this->success('更新成功', 'index');
    }            

    public function delete()
    {   
        db('history')->where("id=".input('id'))->delete();
        $this->success('删除成功', 'index');
    }    

    public function save()
    {
        model('intro')->saveInfo();
        $this->success('添加成功', 'index');
    }
}
