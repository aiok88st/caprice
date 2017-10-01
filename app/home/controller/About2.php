<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Request;

class About2 extends Common2{
    public function _initialize()
    {
        parent::_initialize();
    }

    public function index(){
        //历届展会
        $ad = db('ad');
        $top = $ad->where('type_id',10)->order('sort asc')->find();
        $this->assign('top',$top);
        $enarticle = db('enarticle');
        $caprice = $enarticle->where("open",1)->where("catid",42)->order("listorder asc")->find();
        $cat = db('category');
        $arr = $cat->where('parentid',22)->field("title,keywords,description")->find();
        $arrs['title'] = $arr['title'];
        $arrs['key'] = $arr['keywords'];
        $arrs['des'] = $arr['description'];
        $this->assign('arr',$arrs);
        $this->assign('caprice',$caprice);
        $page = db('page');
        $team = $page->where('id',43)->find();
        $this->assign('team',$team);
        $server = $enarticle->where("open",1)->where("catid",44)->order("listorder asc")->select();
        $this->assign('server',$server);
        $product = $page->where('id',49)->find();
        $this->assign('product',$product);
        $wen = $enarticle->where("open",1)->where("catid",50)->order("listorder asc")->select();
        foreach($wen as $k=>$v){
            $content = $v['content'];
        }
        $this->assign('content',$content);
        $this->assign('wen',$wen);
        //发展历程
        $fa = $enarticle->where("open",1)->where("catid",51)->order("listorder asc")->select();
        $this->assign('fa',$fa);
        //公司荣誉
        $yu = $enarticle->where("open",1)->where("catid",52)->order("listorder asc")->select();
        $this->assign('yu',$yu);
        //公司荣誉轮播图
        $ad = db('ad');
        $rong = $ad->where('type_id',16)->order('sort asc')->select();
        $this->assign('rong',$rong);
        return $this->fetch();
    }


}