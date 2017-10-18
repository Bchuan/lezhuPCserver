<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\getapp\index.html";i:1507886064;s:81:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\public\head.html";i:1508310960;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="Content-Language" content="zh-cn" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=0">
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script> 
 	<script src="https://cdn.bootcss.com/vue/2.4.4/vue.min.js"></script>
	<title>app下载</title>
	<link type="text/css" rel="stylesheet" href="__STATICPATH__/static/css/appdl.css" />
	<script type="text/javascript" src="__STATICPATH__/static/js/head.js"></script>
</head>
<body>

 	<script src="https://cdn.bootcss.com/vue/2.4.4/vue.min.js"></script>
	<link type="text/css" rel="stylesheet" href="__STATICPATH__/static/css/head.css" />
	<script type="text/javascript" src="__STATICPATH__/static/js/head.js" ></script>
<body>
	<div class="bc_navlistbar">
		<div class="header"> <!-- 头部导航 -->
			<div class="header_l">
				<img src="__STATICPATH__/static/images/nav_foot/logo1.jpg" alt="">
			</div>
			<div class="header_m">
				<ul class="header_m_ul">
					<li class="active"><a href="<?php echo url('/index/index/index'); ?>">首页</a></li>
					<li><a href="<?php echo url('/index/productintro/index'); ?>">产品简介</a></li>
					<li class="hezuo">合作专区
						<span class="glyphicon glyphicon-chevron-down"></span>
						<div class="hezuo_hide">
							<ul>
								<li><a href="<?php echo url('/index/cityopration/index'); ?>">城市运营商</a></li>
								<li><a href="<?php echo url('/index/advertise/index'); ?>">广告合作</a></li>
								<li><a href="<?php echo url('/index/property/index'); ?>">物业合作</a></li>
								<li><a href="<?php echo url('/index/develop/index'); ?>">开发商合作</a></li>
							</ul>
						</div>
					</li>
					<li><a href="<?php echo url('/index/companyintro/index'); ?>">企业简介</a></li>
					<li><a href="<?php echo url('/index/newslist/index'); ?>">新闻动态</a></li>
					<li><a href="<?php echo url('/index/connectus/index'); ?>">联系我们</a></li>
					<li><a href="<?php echo url('/index/getapp/index'); ?>">App下载</a></li>
				</ul>
			</div>
			<div class="header_r">
				<span class="glyphicon glyphicon-hand-right"></span>
				<span>全国招商热线 : 400-8090-590</span>
			</div>
			<div id="donghuakuang"></div>
		</div>
	</div>
	
<div class="app">
	<div class="appdl">
		<h1>小区生态链的"连接器"</h1>
		<div class="app_l">
			<img src="__STATICPATH__/static/images/getapp/appdl.png" alt="">
		</div>
		<div class="app_r">
			<h3>各大应用商店搜索“乐住”均可下载</h3>
			<div class="app_r_l">
				<img src="__STATICPATH__/static/images/getapp/download1.png" alt="">
				<p>乐住业主端APP（下载）二维码</p>
				<div>
					<img src="__STATICPATH__/static/images/getapp/android.png" alt="">
					<span>Android版</span>
				</div>
			</div>
			
			<div class="app_r_r">
				<img src="__STATICPATH__/static/images/getapp/download2.png" alt="">
				<p>乐住物业端APP（下载）二维码</p>
				<div>
					<img src="__STATICPATH__/static/images/getapp/ios.png" alt="">
					<span>IPhone版</span>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>