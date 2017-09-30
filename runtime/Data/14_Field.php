<?php
return array (
  'catid' => 
  array (
    'id' => 157,
    'moduleid' => 14,
    'field' => 'catid',
    'name' => '栏目',
    'tips' => '',
    'required' => 1,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => 'defaul',
    'errormsg' => '',
    'class' => 'catid',
    'type' => 'catid',
    'setup' => '',
    'ispost' => 0,
    'unpostgroup' => '',
    'listorder' => 1,
    'status' => 1,
    'issystem' => 0,
  ),
  'title' => 
  array (
    'id' => 152,
    'moduleid' => 14,
    'field' => 'title',
    'name' => '标题',
    'tips' => '',
    'required' => 1,
    'minlength' => 1,
    'maxlength' => 80,
    'pattern' => '',
    'errormsg' => '标题必须为1-80个字符',
    'class' => '',
    'type' => 'title',
    'setup' => 'array (
  \'thumb\' => \'1\',
  \'style\' => \'1\',
  \'size\' => \'55\',
)',
    'ispost' => 1,
    'unpostgroup' => '',
    'listorder' => 2,
    'status' => 1,
    'issystem' => 1,
  ),
  'keywords' => 
  array (
    'id' => 158,
    'moduleid' => 14,
    'field' => 'keywords',
    'name' => '关键词',
    'tips' => '',
    'required' => 0,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => 'defaul',
    'errormsg' => '',
    'class' => 'keywords',
    'type' => 'text',
    'setup' => 'array (
  \'default\' => \'\',
  \'ispassword\' => \'0\',
  \'fieldtype\' => \'varchar\',
)',
    'ispost' => 0,
    'unpostgroup' => '',
    'listorder' => 3,
    'status' => 1,
    'issystem' => 0,
  ),
  'description' => 
  array (
    'id' => 159,
    'moduleid' => 14,
    'field' => 'description',
    'name' => 'SEO简介',
    'tips' => '',
    'required' => 0,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => 'defaul',
    'errormsg' => '',
    'class' => 'description',
    'type' => 'textarea',
    'setup' => 'array (
  \'fieldtype\' => \'mediumtext\',
  \'default\' => \'\',
)',
    'ispost' => 0,
    'unpostgroup' => '',
    'listorder' => 4,
    'status' => 1,
    'issystem' => 0,
  ),
  'images' => 
  array (
    'id' => 160,
    'moduleid' => 14,
    'field' => 'images',
    'name' => '图组',
    'tips' => '',
    'required' => 0,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => 'defaul',
    'errormsg' => '',
    'class' => 'images',
    'type' => 'images',
    'setup' => '',
    'ispost' => 0,
    'unpostgroup' => '',
    'listorder' => 5,
    'status' => 1,
    'issystem' => 0,
  ),
  'content' => 
  array (
    'id' => 161,
    'moduleid' => 14,
    'field' => 'content',
    'name' => '内容',
    'tips' => '',
    'required' => 1,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => 'defaul',
    'errormsg' => '',
    'class' => 'content',
    'type' => 'editor',
    'setup' => 'array (
  \'edittype\' => \'UEditor\',
)',
    'ispost' => 0,
    'unpostgroup' => '',
    'listorder' => 6,
    'status' => 1,
    'issystem' => 0,
  ),
  'posid' => 
  array (
    'id' => 162,
    'moduleid' => 14,
    'field' => 'posid',
    'name' => '推荐位',
    'tips' => '',
    'required' => 0,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => 'defaul',
    'errormsg' => '',
    'class' => 'posid',
    'type' => 'posid',
    'setup' => '',
    'ispost' => 0,
    'unpostgroup' => '',
    'listorder' => 7,
    'status' => 1,
    'issystem' => 0,
  ),
  'hits' => 
  array (
    'id' => 153,
    'moduleid' => 14,
    'field' => 'hits',
    'name' => '点击次数',
    'tips' => '',
    'required' => 0,
    'minlength' => 0,
    'maxlength' => 8,
    'pattern' => '',
    'errormsg' => '',
    'class' => '',
    'type' => 'number',
    'setup' => 'array (
  \'size\' => \'10\',
  \'numbertype\' => \'1\',
  \'decimaldigits\' => \'0\',
  \'default\' => \'0\',
)',
    'ispost' => 1,
    'unpostgroup' => '',
    'listorder' => 8,
    'status' => 0,
    'issystem' => 0,
  ),
  'createtime' => 
  array (
    'id' => 154,
    'moduleid' => 14,
    'field' => 'createtime',
    'name' => '发布时间',
    'tips' => '',
    'required' => 1,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => 'date',
    'errormsg' => '',
    'class' => '',
    'type' => 'datetime',
    'setup' => '',
    'ispost' => 1,
    'unpostgroup' => '',
    'listorder' => 9,
    'status' => 1,
    'issystem' => 1,
  ),
  'status' => 
  array (
    'id' => 156,
    'moduleid' => 14,
    'field' => 'status',
    'name' => '状态',
    'tips' => '',
    'required' => 0,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => '',
    'errormsg' => '',
    'class' => '',
    'type' => 'radio',
    'setup' => 'array (
  \'options\' => \'发布|1
定时发布|0\',
  \'fieldtype\' => \'tinyint\',
  \'numbertype\' => \'1\',
  \'labelwidth\' => \'75\',
  \'default\' => \'1\',
)',
    'ispost' => 1,
    'unpostgroup' => '',
    'listorder' => 10,
    'status' => 1,
    'issystem' => 1,
  ),
  'template' => 
  array (
    'id' => 155,
    'moduleid' => 14,
    'field' => 'template',
    'name' => '模板',
    'tips' => '',
    'required' => 0,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => '',
    'errormsg' => '',
    'class' => '',
    'type' => 'template',
    'setup' => '',
    'ispost' => 1,
    'unpostgroup' => '',
    'listorder' => 11,
    'status' => 1,
    'issystem' => 1,
  ),
);
?>