<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Request;

class Products2 extends Common2{
    public function _initialize(){
        parent::_initialize();
    }
    public function index(){
        $ad = db('ad');
        $top = $ad->where('type_id',5)->order('sort asc')->find();
        $this->assign('top',$top);
        $data = Db::name('enproduct')->order("listorder asc")->paginate(12);//返回的是对象
        $page = $data->render();//获取分页
        $list = $data->all();//获取数组;
        $cat = db('category');
        $arr = $cat->where('id',21)->field("title,keywords,description")->find();
        $productNav = $cat->where('lang',2)->where('parentid',21)->field("catname,id,parentid,url")->order('listorder asc')->select();
        $this->assign('productNav',$productNav);
        $arrs['title'] = $arr['title'];
        $arrs['key'] = $arr['keywords'];
        $arrs['des'] = $arr['description'];
        $this->assign('arr',$arrs);
        $this->assign('data',$list);
        $this->assign('page',$page);
        return $this->fetch();
    }

    public function product(){
        $catid = input('id');
        $where = array();  // 空的where条件
        if($catid){
            $where['catid'] = $catid;
        }
        $data = Db::name('enproduct')->where($where)->order("listorder asc")->paginate(12);//返回的是对象
        $page = $data->render();//获取分页
        $list = $data->all();//获取数组;
        $pArr = [
            'list'=>$list,
            'page'=>$page
        ];
        return $pArr;
    }


}