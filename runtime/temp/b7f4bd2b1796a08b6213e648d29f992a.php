<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:53:"F:\wamp\www\cltphp5.2/app/home\view\index2\index.html";i:1506783800;s:53:"F:\wamp\www\cltphp5.2/app/home\view\common\index.html";i:1506774386;s:55:"F:\wamp\www\cltphp5.2/app/home\view\public2\footer.html";i:1506693701;}*/ ?>
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

<div id="banner">
	<div class="swiper-container swiper-container-main">
		<div class="swiper-wrapper">

			<?php if(is_array($top) || $top instanceof \think\Collection || $top instanceof \think\Paginator): $i = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
			<div class="swiper-slide">
				<img src="__PUBLIC__/<?php echo $v1["pic"]; ?>" />
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>

		</div>
		<div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</div>
<div id="aboutUs">
	<div class="container aboutUs">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-7 col-md-offset-0">
				<div class="auBanner">
					<div class="swiper-container swiper-container-au">
						<div class="swiper-wrapper">
							<?php if(is_array($about) || $about instanceof \think\Collection || $about instanceof \think\Paginator): $i = 0; $__LIST__ = $about;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
							<div class="swiper-slide">
								<img src="__PUBLIC__/<?php echo $v2["pic"]; ?>" />
							</div>
							<?php endforeach; endif; else: echo "" ;endif; ?>

						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-0">
				<div class="usContent">
					<div class="usTitle">
						<p>about us</p>
						<img src="__HOME__/img/usTitle.png" class="img-responsive"/>
					</div>
					<div class="usName">
						<p><?php echo $v2["name"]; ?></p>
						<p></p>
					</div>
					<div class="usDetails">
						<p><?php echo $v2["content"]; ?></p>
					</div>
					<div>
						<a class="lookMore" href="###">See More</a>
					</div>
				</div>
			</div>
		</div>
		<img src="__HOME__/img/auBkg.png" />
	</div>
</div>
<div id="serve">
	<div class="container">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4">
				<div class="serBox">
					<ul>
						<li>
							<img src="__HOME__/img/oem.png" class="img-responsive" />
						</li>
						<li>
							<a href="###">OEM&#38;ODM</a>
							<span></span>
						</li>
						<li>
							<p>Capriccio with technical design and development of professional staff, has accumulated years of production and operation of OEM and ODM processing experience.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4">
				<div class="serBox">
					<ul>
						<li>
							<img src="__HOME__/img/person.png" class="img-responsive"/>
						</li>
						<li>
							<a href="###">Personalized customization service</a>
							<span></span>
						</li>
						<li>
							<p>Capriccio can meet all your business needs, for your custom is personalized products, you can buy any of the products you need in capriccio.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4">
				<div class="serBox">
					<ul>
						<li>
							<img src="__HOME__/img/manage.png" class="img-responsive"/>
						</li>
						<li>
							<a href="###">OEM&#38;ODM</a>
							<span></span>
						</li>
						<li>
							<p>Capriccio has advanced production system, inventory control system, ensure the stability of supply, the full range of products inventory sufficient, no MOQ requirement.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="produce">
	<div class="proTitle">
		<ul>
			<li>
				<p>Products</p>
			</li>
			<li>
				<img src="__HOME__/img/proCenter.png" class="center-block img-responsive"/>
			</li>
		</ul>
	</div>
	<div class="proNavBox">
		<div class="proNav" align="center">
			<ul>
				<li>
					<a href="javascript:;" onclick="changeproduct('')" class="proNavActive" >whole</a>
				</li>
				<?php if(is_array($productNav) || $productNav instanceof \think\Collection || $productNav instanceof \think\Paginator): $i = 0; $__LIST__ = $productNav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?>
				<li>
					<a href="javascript:;" onclick="changeproduct('<?php echo $v3['id']; ?>')"><?php echo $v3["catname"]; ?></a>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
		</div>
	</div>
	<div class="proList">
		<div class="container">
			<div class="row" id="proListRow">
				<?php if(is_array($pArr) || $pArr instanceof \think\Collection || $pArr instanceof \think\Paginator): $i = 0; $__LIST__ = $pArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v4): $mod = ($i % 2 );++$i;?>
				<div class="col-xs-6 col-sm-4 col-md-4">
					<div class="picBox">
						<img src="__PUBLIC__/<?php echo $v4["thumb"]; ?>" class="img-responsive"/>
						<div class="picOn">
							<p><?php echo $v4["title"]; ?></p>
							<a href=""><img src="__HOME__/img/right.png"  class="center-block"/></a>
						</div>
					</div>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="proMore">
			<a class="lookMore" href="<?php echo url('home/products2/index'); ?>?catid=21">See More</a>
		</div>
	</div>
</div>
<script type="text/javascript">
	function changeproduct(id){
		$.ajax({
			url:"product2/id="+id,
			type:"post",
			data:{"id":id},
			dataType:"json",
			success:function(re){
				productList = re;
				var html="";
				for(item in productList){
					html +='<div class="col-xs-6 col-sm-4 col-md-4">';
					html +='<div class="picBox">';
					html +='<img src="__PUBLIC__/'+productList[item].thumb+'" class="img-responsive"/>';
					html +='<div class="picOn">';
					html +='<p>'+productList[item].title+'</p>';
					html +='<a href=""><img src="__HOME__/img/right.png"  class="center-block"/></a>';
					html +='</div></div></div>';
				}
				$('#proListRow').html(html);
			}
		});
	}
</script>

<div id="meeting">
	<div class="mtTitle">
		<ul>
			<li>
				<p>Previous exhibitions</p>
			</li>
			<li>
				<img src="__HOME__/img/meeting.png" class="img-responsive center-block"/>
			</li>
		</ul>
	</div>


	<div class="mtPicShow">
		<div class="container">
			<div class="row">

				<?php if(is_array($artArr) || $artArr instanceof \think\Collection || $artArr instanceof \think\Paginator): $i = 0; $__LIST__ = $artArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v5): $mod = ($i % 2 );++$i;?>
				<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
					<div class="mtPicBox">
						<a href="<?php echo url('Exhibition2/detail2',array('id'=>$v5['id'])); ?>" target="_blank" ><img src="__PUBLIC__/<?php echo $v5["thumb"]; ?>" class="img-responsive" /></a>
						<div class="mtOn">
							<div class="floatl">
								<div class="mtBorder">
									<?php if(is_array($v5['time']) || $v5['time'] instanceof \think\Collection || $v5['time'] instanceof \think\Paginator): $k = 0; $__LIST__ = $v5['time'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?>
									<ul>
										<li>
											<?php if($k == 3): ?><p><?php echo $v; ?></p><?php endif; ?>
										</li>
										<li>
											<?php if($k == 2): ?>
											<p>
												<?php switch($v): case "01": ?>Jan.<?php break; case "02": ?>Feb.<?php break; case "03": ?>Mar.<?php break; case "04": ?>Apr.<?php break; case "05": ?>May.<?php break; case "06": ?>Jun.<?php break; case "07": ?>Jul.<?php break; case "08": ?>Aug.<?php break; case "09": ?>Sep.<?php break; case "10": ?>Oct.<?php break; case "11": ?>Nov.<?php break; default: ?>Dec.
												<?php endswitch; ?>
											</p>
											<?php endif; ?>
										</li>

									</ul>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</div>
							</div>
							<div class="floatl">
								<ul>
									<li>
										<p><nobr><?php echo $v5["title"]; ?></nobr></p>
									</li>
									<li>
										<p><?php echo $v5["contentdes"]; ?></p>
									</li>
								</ul>
							</div>
							<div class="clearl"></div>
						</div>
					</div>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>

			</div>
		</div>
	</div>

	<div class="mtMore">
		<a class="lookMore" href="<?php echo url('home/exhibition2/index'); ?>?catid=23">See More</a>
	</div>
</div>


<footer id="foot">
    <div class="foot">
        <div class="container">
            <div class="row">
                <div class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">
                    <div class="footOne">
                        <div class="floatl">
                            <img src="__PUBLIC__/<?php echo $sArr["logo"]; ?>" class="img-responsive"/>
                        </div>
                        <div class="floatl">
                            <p><?php echo $sArr["name"]; ?></p>
                            <ul>
                                <li class="contact">
                                    <a href="###"><img src="__HOME__/img/qq.png"/></a>
                                </li>
                                <li class="contact" style="position: relative;">
                                    <div class="wechatBox">
                                        <img src="__PUBLIC__/<?php echo $sArr["wxpic"]; ?>" />
                                    </div>
                                    <a href="###"><img src="__HOME__/img/wechat.png"/></a>
                                </li>
                                <li class="contact">
                                    <a href="###"><img src="__HOME__/img/weibo.png"/></a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearl"></div>
                    </div>
                </div>
                <div class="col-xs-offset-1 col-xs-10   col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 footTwo">
                    <ul>
                        <li>
                            <p>place：<?php echo $sArr["ads"]; ?></p>
                        </li>
                        <li>
                            <p>cellphone：<?php echo $sArr["tel"]; ?></p>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-offset-1 col-xs-10  col-sm-6 col-sm-offset-3 col-md-2 col-md-offset-0 footTwo">
                    <ul>
                        <li>
                            <p>Zip code：<?php echo $sArr["youbian"]; ?></p>
                        </li>
                        <li>
                            <p>Fax：<?php echo $sArr["fax"]; ?></p>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-offset-1 col-xs-10  col-sm-6 col-sm-offset-3  col-md-2 col-md-offset-0 footTwo">
                    <ul>
                        <li>
                            <p>Telephone：<?php echo $sArr["phone"]; ?></p>
                        </li>
                        <li>
                            <p>Email：<?php echo $sArr["email"]; ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footBottom">
        <p>&copy; <?php echo $sArr["bah"]; ?></p>
    </div>
</footer>
<script type="text/javascript" src="__HOME__/js/index.js" ></script>
</body>
</html>
