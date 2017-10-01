<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"F:\wamp\www\caprice/app/home\view\products2\productDetails.html";i:1506846030;s:51:"F:\wamp\www\caprice/app/home\view\common\index.html";i:1506846205;s:54:"F:\wamp\www\caprice/app/home\view\public2\footer2.html";i:1506821374;}*/ ?>
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
    
<link rel="stylesheet" href="__HOME__/css/productDetails.css" />

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
		<div id="proShow">
			<div class="" style="height: 50px;">

			</div>
			<div class="container" style="position: relative;">
				<div class="row">
					<div class="col-xs-6 col-sm-7">
						<img src="__PUBLIC__/<?php echo $list['thumb']; ?>" class="img-responsive center-block" />
					</div>
					<div class="rightContent col-xs-6 col-sm-5">
						<ul>
							<li>
								<p><?php echo $list['title']; ?></p>
							</li>
							<li>
								<p><?php echo $list['subtitle']; ?></p>
							</li>

						</ul>
					</div>
				</div>
				<div class="types">
					<ul>
						<li>
							<a href="###" class="typeActive"><img src="__PUBLIC__/<?php echo $list['thumb']; ?>" width="65px" height="60px"/></a>
						</li>
						<li>
							<a href="###"><img src="__PUBLIC__/<?php echo $list['thumb']; ?>" width="65px" height="60px"/></a>
						</li>
						<li>
							<a href="###"><img src="__PUBLIC__/<?php echo $list['thumb']; ?>" width="65px" height="60px"/></a>
						</li>
						<li>
							<a href="###"><img src="__PUBLIC__/<?php echo $list['thumb']; ?>" width="65px" height="60px"/></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="produce">
			<div class="proTitle">
				<p>-Product parameter-</p>
			</div>
			<div class="container sizeBox">
				<?php echo $list['parameter']; ?>
				<div class="clearl"></div>
			</div>
			<div class="proTitle">
				<p>-product details-</p>
			</div>
			<div class="container">
				<div class="proBoxes">
					<ul>
						<?php if(is_array($images) || $images instanceof \think\Collection || $images instanceof \think\Paginator): $i = 0; $__LIST__ = $images;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<li>
							<img src="__PUBLIC__/<?php echo $vo; ?>" />
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			
			<div class="proTitle">
				<p>-Other products-</p>
			</div>
			<div class="proList">
				 <div class="container">
				 	<div class="row">
						<?php if(is_array($other) || $other instanceof \think\Collection || $other instanceof \think\Paginator): $i = 0; $__LIST__ = $other;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				 		<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0">
				 			<div class="picBox">
				 				<img src="__PUBLIC__/<?php echo $v['thumb']; ?>" class="img-responsive"/>
				 				<div class="picOn">
				 					<p><?php echo $v['title']; ?></p>
				 					<a href="<?php echo url('products2/productDetails'); ?>?catid=21&id=<?php echo $v['id']; ?>"><img src="__HOME__/img/right.png"  class="center-block"/></a>
				 				</div>
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
