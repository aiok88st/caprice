<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use clt\Bootstrap;
class Exhibition2 extends Common2{

    public function _initialize(){
        parent::_initialize();
    }
    public function index(){
        //历届展会
        $ad = db('ad');
        $top = $ad->where('type_id',11)->order('sort asc')->find();
        $this->assign('top',$top);
        $data = Db::name('enarticle')->where("open",1)->where("catid",23)->order("listorder asc")->paginate(9);//返回的是对象
        $page = $data->render();//获取分页
        $list = $data->all();//获取数组;
        foreach($list as $k=>$v){
            $catid = $v['catid'];
            $list[$k]['time'] = explode('-',date('Y-m-d',$v['createtime']));
        }
        $cat = db('category');
        $arr = $cat->where('id',$catid)->field("title,keywords,description")->find();
        $arrs['title'] = $arr['title'];
        $arrs['key'] = $arr['keywords'];
        $arrs['des'] = $arr['description'];
        $this->assign('arr',$arrs);
        $this->assign('list',$list);
        $this->assign('page',$page);
        return $this->fetch();
    }

    public function detail2(){
        $id = input('id');
        $enart = db('enarticle')->where('id',$id)->find();
        $time = date('Y-m-d',$enart['createtime']);
        $timeArr = explode('-',$time);
        $tArr = [
            'date'=>$timeArr[1],
            'day'=>$timeArr[2],
        ];
        $this->assign('tArr',$tArr);
        $arrs['title'] = $enart['title'];
        $arrs['key'] = $enart['keywords'];
        $arrs['des'] = $enart['description'];
        $this->assign('arr',$arrs);
        $this->assign('detail',$enart['content']);
        $ad = db('ad');
        $top = $ad->where('type_id',11)->order('sort asc')->select();
        $this->assign('top',$top);

        return $this->fetch();
    }

}


