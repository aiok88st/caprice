<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"F:\wamp\www\caprice/app/home\view\exhibition2\detail2.html";i:1506777435;s:51:"F:\wamp\www\caprice/app/home\view\common\index.html";i:1506846205;s:54:"F:\wamp\www\caprice/app/home\view\public2\footer2.html";i:1506821374;}*/ ?>
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
    
<link rel="stylesheet" href="__HOME__/css/meeting.css" />

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

<div id="banners">
    <?php if(is_array($top) || $top instanceof \think\Collection || $top instanceof \think\Paginator): $i = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <img src="__PUBLIC__/<?php echo $vo["pic"]; ?>" />
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>

<div id="mtDetails">

    <div class="mtContent">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="floatr date">
                        <p><?php echo $tArr['day']; ?></p>
                        <p>
                            <?php switch($tArr['date']): case "01": ?>Jan.<?php break; case "02": ?>Feb.<?php break; case "03": ?>Mar.<?php break; case "04": ?>Apr.<?php break; case "05": ?>May.<?php break; case "06": ?>Jun.<?php break; case "07": ?>Jul.<?php break; case "08": ?>Aug.<?php break; case "09": ?>Sep.<?php break; case "10": ?>Oct.<?php break; case "11": ?>Nov.<?php break; default: ?>Dec.
                            <?php endswitch; ?>
                        </p>
                    </div>
                    <div class="clearr">

                    </div>
                </div>
                <div class="col-md-10 col-sm-10 col-xs-10">
                    <div class="mainContent">
                        <ul>
                            <?php echo $detail; ?>

                            <li>
                                <div class="share bdsharebuttonbox">
                                    <ul>
                                        <li>
                                            <p>Share news to：</p>
                                        </li>
                                        <li>
                                            <a href="###" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                                        </li>
                                        <li>
                                            <a href="###" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=" container">
            <div class="nextPrev">
                <div class="floatl">
                    <a href="###"><img src="__HOME__/img/prev.png"/></a>
                </div>
                <div class="floatl">
                    <a href="###">Guangzhou World Trade Fair exhibition site</a>
                </div>
                <div class="floatr">
                    <a href="###"><img src="__HOME__/img/next.png"/></a>
                </div>
                <div class="floatr">
                    <a href="###">Guangzhou World Trade Fair exhibition site</a>
                </div>
                <div class="clearboth"></div>
            </div>
        </div>

        <script type="text/javascript" id="bdshare_js" data="type=tools&uid=6478904" ></script>
        <script type="text/javascript" id="bdshell_js"></script>
        <script>
            window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};
            with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
        </script>
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
