<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
Route::get([
    'index' => 'home/index/index',//中文版
    'index2' => 'home/index2/index',//英文版
    'exhibition2'=>'home/exhibition2/index',//英文版历届展会
    'seeexhibition'=>'home/exhibition2/index',
    'shop2'=>'home/Shop2/index',//英文版
    'contact2'=>'home/Contact2/index',//英文版
    'products2'=>'home/Products2/index',//英文版
    'about2'=>'home/about2/index',//英文版
]);
Route::post([
    'product2/:catId' => 'home/index2/product',//首页产品中心(英文版)
    'product/:catId' => 'home/index/product',//首页产品中心(中文版)
    'detail2/:id' => 'home/exhibition2/detail',//首页产品中心(英文版)
    'products2/:catId' => 'home/Products2/product',//产品中心(英文版)
]);
