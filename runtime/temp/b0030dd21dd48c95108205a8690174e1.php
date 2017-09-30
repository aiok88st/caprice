<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"F:\wamp\www\cltphp5.2/app/home\view\contact2\index.html";i:1506770180;s:53:"F:\wamp\www\cltphp5.2/app/home\view\common\index.html";i:1506774386;s:56:"F:\wamp\www\cltphp5.2/app/home\view\public2\footer2.html";i:1506770813;}*/ ?>
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
    
<link rel="stylesheet" href="__HOME__/css/address.css" />
<script src="http://cache.amap.com/lbs/static/es5.min.js"></script>
<script src="http://webapi.amap.com/maps?v=1.3&key=5433dcc2bc76f4bfae5b9b20179efac5"></script>
<script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>

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
                        <a href="index"><p>中文版<span></span></p></a>
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
<div id="map"></div>
<div id="contract">
    <div class="contractTitle">
        <ul>
            <li>
                <p>Contact us</p>
            </li>
            <li>
                <img src="__HOME__/img/contactTitle.png" class="center-block img-responsive"/>
            </li>
        </ul>
    </div>
    <div class="container contact">
        <div class="row">

            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="col-xs-10 col-xs-offset-2 col-sm-offset-3 col-sm-6 col-md-offset-0 col-md-4">
                <ul>
                    <li>
                        <p><?php echo $vo['title']; ?></p>
                    </li>
                    <li>
                        <a href="###">Check out the store map</a>
                    </li>
                    <?php echo $vo['content']; ?>
                </ul>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

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
</body>
</html>
