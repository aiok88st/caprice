<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:51:"F:\wamp\www\caprice/app/home\view\about2\index.html";i:1506838035;s:51:"F:\wamp\www\caprice/app/home\view\common\index.html";i:1506846205;s:54:"F:\wamp\www\caprice/app/home\view\public2\footer2.html";i:1506821374;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1,user-scalable=no">
    <title><?php echo $arr['title']; ?></title>
    <meta name="keywords" content="<?php echo $arr['key']; ?>">
    <meta name="description" content="<?php echo $arr['des']; ?>">
    <link rel="stylesheet" href="__HOME__/css/reset.css" />
    <link rel="stylesheet" href="__HOME__/css/swiper-3.4.2.min.css" />
    <link rel="stylesheet" href="__HOME__/css/bootstrap.min.css" />
    <link rel="stylesheet" href="__HOME__/css/public.css" />
    <link rel="stylesheet" href="__HOME__/css/index.css" />
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="__HOME__/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="__HOME__/js/public.js" ></script>
    <script type="text/javascript" src="__HOME__/js/swiper-3.4.2.min.js" ></script>
    
<link rel="stylesheet" href="__HOME__/css/aboutUs.css" />

</head>
<body>
<header>
    <nav class="container">
        <div class="navbar navbar-default">
            <div class="navbar-header">
                　	<!-- .navbar-toggle样式用于toggle收缩的内容，即nav-collapse collapse样式所在元素 -->
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#demo">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- 确保无论是宽屏还是窄屏，navbar-brand都显示 -->
                <a href="##" class="navbar-brand logo"><img src="__HOME__/img/logoOne.png"></a>
            </div>
            <!-- 屏幕宽度小于768px时，div.navbar-responsive-collapse容器里的内容都会隐藏，显示icon-bar图标，当点击icon-bar图标时，再展开。屏幕大于768px时，默认显示。 -->

            <div class="collapse navbar-collapse navbar-responsive-collapse" id="demo">
                <ul class="nav navbar-nav">

                    <li><a href="<?php echo url('home/index2/index'); ?>" <?php if($catid == ''): ?>class="activeNav"<?php endif; ?>><p>home<span></span></p></a></li>
                    <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo url($vo['url']); ?>?catid=<?php echo $vo['id']; ?>" <?php if($catid == $vo['id']): ?>class="activeNav"<?php endif; ?>><p><?php echo $vo["catname"]; ?><span></span></p></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <li>
                        <a href="<?php echo url('home/index/index'); ?>"><p>中文版<span></span></p></a>
                    </li>
                    <li id="lastNav">
                        <input id="searchBox" type="text" placeholder="content" class="flaotr"/>
                        <a href="##" id="search" class="floatr"><img src="__HOME__/img/search.png" /></a>
                        <div class="clearr"></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<div style="height: 50px;"></div>
<div id="bannerabout">
    <img src="__PUBLIC__/<?php echo $top['pic']; ?>" />
</div>
<div id="hNav" align="center">
    <ul>
        <li>
            <a href="javascript:;" class="hNav-active" onclick="abstract()" id="abstract">Company profile</a>
        </li>
        <li>
            <a href="javascript:;" onclick="develop()" id="develops">Development history</a>
        </li>
        <li>
            <a href="javascript:;" onclick="Honor()" id="honors">Company honor</a>
        </li>
    </ul>
</div>
<div id="honor" class="container" style="display: none;">
    <ul>

        <?php if(is_array($yu) || $yu instanceof \think\Collection || $yu instanceof \think\Paginator): $k = 0; $__LIST__ = $yu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k == 1): ?>
        <li>
            <div class="hboxfirst">
                <div class="companyl floatl">
                    <p><?php echo $vo['title']; ?></p>
                </div>
                <div class="companylcl floatl">
                    <?php echo $vo['contentdes']; ?>
                </div>
                <div class="clearl"></div>
            </div>
        </li>
        <?php else: ?>
        <li>
            <div class="hbox">
                <div class="cl floatl">
                    <p><?php echo $vo['title']; ?></p>
                </div>
                <div class="cr floatl">
                    <p><?php echo $vo['contentdes']; ?></p>
                </div>
                <div class="clearl"></div>
            </div>
        </li>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <li>
            <div class="picBox">
                <div class="swiper-container swiper-container-pic">
                    <div class="swiper-wrapper">
                        <?php if(is_array($rong) || $rong instanceof \think\Collection || $rong instanceof \think\Paginator): $i = 0; $__LIST__ = $rong;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?>
                        <div class="swiper-slide">
                            <img src="__PUBLIC__/<?php echo $r['pic']; ?>" />
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <a href="javascript:;" id="leftOne"><img src="__HOME__/img/leftOne.png"/></a>
                <a href="javascript:;" id="RightOne"><img src="__HOME__/img/rightOne.png"/></a>
            </div>
        </li>
    </ul>
</div>
<div id="develop" class="container" style="display: none;">
    <ul>
        <?php if(is_array($fa) || $fa instanceof \think\Collection || $fa instanceof \think\Paginator): $i = 0; $__LIST__ = $fa;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
        <li>
            <div class="hbox">
                <div class="cl floatl">
                    <p><?php echo $v1['title']; ?></p>
                </div>
                <div class="cr floatl">
                    <p><?php echo $v1['content']; ?></p>
                </div>
                <div class="clearl"></div>
                <?php if($v1['thumb'] != ''): ?>
                <div class="clp floatl">
                </div>
                <div class="crp floatl">
                    <img src="__PUBLIC__/<?php echo $v1['thumb']; ?>" />
                </div>
                <div class="clearl"></div>
                <?php endif; ?>
            </div>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>



    </ul>
</div>
<div id="brief">
    <div class="firstPart">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
                    <div class="firstContent">
                        <ul>
                            <li>
                                <p><?php echo $caprice['title']; ?></p>
                                <img src="__HOME__/img/who.png" class="pices"/>
                            </li>
                            <?php echo $caprice['contentdes']; ?>
                            <li>
                                <?php echo $caprice['content']; ?>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
                    <div class="firstBox">
                        <img src="__PUBLIC__/<?php echo $caprice['thumb']; ?>" />
                        <img src="__HOME__/img/firstPic.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="secondPart">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
                    <div class="secondBox">
                        <img src="__PUBLIC__/<?php echo $team['thumb']; ?>" />
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
                    <div class="secondContent">
                        <ul>
                            <li>
                                <p><?php echo $team['title']; ?></p>
                                <img src="__HOME__/img/team.png" class="pices" />
                            </li>
                            <li>
                                <p><?php echo $team['content']; ?></p>
                            </li>
                            <li>
                                <div class="number">
                                    <?php echo $team['contentdes']; ?>
                                </div>
                                <div class="clearboth"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thridPart">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0">
                    <div class="ourServe">
                        <p>Our services</p>
                        <img src="__HOME__/img/serve.png" class="pices" />
                    </div>
                </div>

                <?php if(is_array($server) || $server instanceof \think\Collection || $server instanceof \think\Paginator): $i = 0; $__LIST__ = $server;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
                <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4">
                    <div class="serBox">
                        <ul>
                            <li>
                                <img src="__PUBLIC__/<?php echo $vv['thumb']; ?>" class="img-responsive" />
                            </li>
                            <li>
                                <a href="###"><?php echo $vv['title']; ?></a>
                                <span></span>
                            </li>
                            <li>
                                <p><?php echo $vv['content']; ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
        </div>
    </div>
    <div class="fourPart">
        <div class="container">
            <div class="myPro">
                <p>Our products</p>
                <img src="__HOME__/img/products.png" class="pices" />
            </div>
            <div class="myProShow">
                <img src="__PUBLIC__/<?php echo $product['thumb']; ?>" />
                <p><?php echo $product['content']; ?></p>
            </div>
        </div>
    </div>
    <div class="fivePart">
        <div class="container">
            <div class="fiveContent">
                <ul>
                    <li>
                        <p>Our culture</p>
                        <img src="__HOME__/img/wen.png" class="pices"/>
                    </li>
                    <li>
                        <p><?php echo $content; ?></p>
                    </li>
                </ul>
            </div>
            <div class="row">
                <?php if(is_array($wen) || $wen instanceof \think\Collection || $wen instanceof \think\Paginator): $i = 0; $__LIST__ = $wen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wv): $mod = ($i % 2 );++$i;?>
                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <div class="fiveShow">
                        <ul>
                            <li>
                                <img src="__PUBLIC__/<?php echo $wv['thumb']; ?>" class="center-block img-responsive"/>
                            </li>
                            <li>
                                <p><?php echo $wv['title']; ?></p>
                            </li>
                            <li>
                                <p><?php echo $wv['contentdes']; ?></p>

                            </li>
                        </ul>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
</div>



<footer id="foot">
    <div class="middle">
        <img src="__HOME__/img/mtfoot.png" class="center-block img-responsive"  />
    </div>
    <div class="footBottom">
        <p>&copy;<?php echo $sArr["bah"]; ?></p>
    </div>
</footer>
<script type="text/javascript" src="__HOME__/js/meeting.js" ></script>
<script type="text/javascript" src="__HOME__/js/netShop.js" ></script>
<script type="text/javascript" src="__HOME__/js/address.js" ></script>
<script type="text/javascript" src="__HOME__/js/product.js" ></script>
<script type="text/javascript" src="__HOME__/js/aboutUs.js" ></script>
</body>
</html>
