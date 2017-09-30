<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
class Common2 extends Controller{
    public $title;
    //导航和底部信息
    public function _initialize(){
        //顶部导航
        $cat = db('category');
        $nav = $cat->where('lang',2)->where('parentid',0)->field("catname,id,parentid,url")->order('listorder asc')->select();

        $this->assign('nav',$nav);
        //底部信息
        $system = db('system');
        $sArr = $system->where('id',2)->find();
        $catid= input('catid','');
        $this->assign('catid',$catid);
        $this->assign('sArr',$sArr);

    }

}