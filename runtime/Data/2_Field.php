<?php
return array (
  'status' => 
  array (
    'id' => 172,
    'moduleid' => 2,
    'field' => 'status',
    'name' => '加入首页推荐',
    'tips' => '',
    'required' => 0,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => 'defaul',
    'errormsg' => '',
    'class' => 'status',
    'type' => 'radio',
    'setup' => 'array (
  \'options\' => \'加入首页推荐|2
取消首页推荐|1\',
  \'fieldtype\' => \'tinyint\',
  \'numbertype\' => \'1\',
  \'default\' => \'1\',
)',
    'ispost' => 0,
    'unpostgroup' => '',
    'listorder' => 0,
    'status' => 1,
    'issystem' => 0,
  ),
  'catid' => 
  array (
    'id' => 7,
    'moduleid' => 2,
    'field' => 'catid',
    'name' => '栏目',
    'tips' => '',
    'required' => 1,
    'minlength' => 1,
    'maxlength' => 6,
    'pattern' => '',
    'errormsg' => '必须选择一个栏目',
    'class' => '',
    'type' => 'catid',
    'setup' => '',
    'ispost' => 1,
    'unpostgroup' => '',
    'listorder' => 1,
    'status' => 1,
    'issystem' => 1,
  ),
  'title' => 
  array (
    'id' => 8,
    'moduleid' => 2,
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
    'id' => 9,
    'moduleid' => 2,
    'field' => 'keywords',
    'name' => '关键词',
    'tips' => '',
    'required' => 0,
    'minlength' => 0,
    'maxlength' => 80,
    'pattern' => '',
    'errormsg' => '',
    'class' => '',
    'type' => 'text',
    'setup' => 'array (
  \'size\' => \'55\',
  \'default\' => \'\',
  \'ispassword\' => \'0\',
  \'fieldtype\' => \'varchar\',
)',
    'ispost' => 1,
    'unpostgroup' => '',
    'listorder' => 3,
    'status' => 1,
    'issystem' => 1,
  ),
  'description' => 
  array (
    'id' => 10,
    'moduleid' => 2,
    'field' => 'description',
    'name' => 'SEO简介',
    'tips' => '',
    'required' => 0,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => '',
    'errormsg' => '',
    'class' => '',
    'type' => 'textarea',
    'setup' => 'array (
  \'fieldtype\' => \'mediumtext\',
  \'rows\' => \'4\',
  \'cols\' => \'55\',
  \'default\' => \'\',
)',
    'ispost' => 1,
    'unpostgroup' => '',
    'listorder' => 4,
    'status' => 1,
    'issystem' => 1,
  ),
  'content' => 
  array (
    'id' => 11,
    'moduleid' => 2,
    'field' => 'content',
    'name' => '内容',
    'tips' => '',
    'required' => 0,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => 'defaul',
    'errormsg' => '',
    'class' => 'content',
    'type' => 'editor',
    'setup' => 'array (
  \'edittype\' => \'layedit\',
)',
    'ispost' => 1,
    'unpostgroup' => '',
    'listorder' => 5,
    'status' => 1,
    'issystem' => 1,
  ),
  'contentdes' => 
  array (
    'id' => 174,
    'moduleid' => 2,
    'field' => 'contentdes',
    'name' => '内容简介',
    'tips' => '',
    'required' => 0,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => 'defaul',
    'errormsg' => '',
    'class' => 'contentdes',
    'type' => 'textarea',
    'setup' => 'array (
  \'fieldtype\' => \'text\',
  \'default\' => \'\',
)',
    'ispost' => 0,
    'unpostgroup' => '',
    'listorder' => 6,
    'status' => 1,
    'issystem' => 0,
  ),
  'createtime' => 
  array (
    'id' => 12,
    'moduleid' => 2,
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
    'listorder' => 7,
    'status' => 1,
    'issystem' => 1,
  ),
  'open' => 
  array (
    'id' => 19,
    'moduleid' => 2,
    'field' => 'open',
    'name' => '状态',
    'tips' => '',
    'required' => 1,
    'minlength' => 10,
    'maxlength' => 0,
    'pattern' => 'defaul',
    'errormsg' => '',
    'class' => 'open',
    'type' => 'radio',
    'setup' => 'array (
  \'options\' => \'发布|1
定时发布|0\',
  \'fieldtype\' => \'tinyint\',
  \'numbertype\' => \'1\',
  \'default\' => \'1\',
)',
    'ispost' => 1,
    'unpostgroup' => '',
    'listorder' => 8,
    'status' => 1,
    'issystem' => 1,
  ),
  'posid' => 
  array (
    'id' => 17,
    'moduleid' => 2,
    'field' => 'posid',
    'name' => '推荐位',
    'tips' => '',
    'required' => 0,
    'minlength' => 0,
    'maxlength' => 0,
    'pattern' => '',
    'errormsg' => '',
    'class' => '',
    'type' => 'posid',
    'setup' => '',
    'ispost' => 1,
    'unpostgroup' => '',
    'listorder' => 14,
    'status' => 1,
    'issystem' => 1,
  ),
  'template' => 
  array (
    'id' => 18,
    'moduleid' => 2,
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
    'listorder' => 15,
    'status' => 1,
    'issystem' => 1,
  ),
);
?>