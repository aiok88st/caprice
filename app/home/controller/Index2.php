<?php
namespace app\home\controller;
use think\Controller;
class Index2 extends Common2{

    public function index(){

        //首页顶部banner
        $ad = db('ad');
        $top = $ad->where('type_id',1)->order('sort asc')->select();
        $this->assign('top',$top);
        //首页关于我们轮播
        $about = $ad->where('type_id',15)->order('sort asc')->select();
        $this->assign('about',$about);
        //首页产品中心导航
        $cat = db('category');
        $productNav = $cat->where('lang',2)->where('parentid',21)->field("catname,id,parentid,url")->order('listorder asc')->select();
        $this->assign('productNav',$productNav);
        //首页推荐产品
        $product = db('enproduct');
        $pArr = $product->where('status',2)->order('listorder asc')->limit(6)->select();
        $this->assign('pArr',$pArr);
        //首页展会
        $art = db('enarticle');
        $artArr = $art->where('status',2)->order('listorder asc')->limit(3)->select();
        foreach($artArr as $k=>$v){
            $artArr[$k]['time'] = explode('-',date('Y-m-d',$v['createtime']));
        }
        $this->assign('artArr',$artArr);
        //底部信息
        $system = db('system');
        $sArr = $system->where('id',2)->find();
        $this->assign('arr',$sArr);
        return $this->fetch();
    }

    public function product(){

        $catid = input('id');
        $where = array();  // 空的where条件
        if($catid){
            $where['catid'] = $catid;
        }
        $product = db('enproduct');
        $pArr = $product->where($where)->where('status',2)->order('listorder asc')->limit(6)->select();
        return $pArr;

    }

}