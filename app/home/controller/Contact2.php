<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
class Contact2 extends Common2{
    public function _initialize(){
        parent::_initialize();
    }
    public function index(){

        $article = db("enarticle");
        $data = $article->where("open",1)->where("catid",24)->order("listorder asc")->select();
        foreach($data as $k=>$v){
            $catid = $v['catid'];
        }
        $cat = db('category');
        $arr = $cat->where('id',$catid)->field("title,keywords,description")->find();
        $arrs['title'] = $arr['title'];
        $arrs['key'] = $arr['keywords'];
        $arrs['des'] = $arr['description'];
        $this->assign('arr',$arrs);
        $this->assign('data',$data);
        return $this->fetch();
    }


}