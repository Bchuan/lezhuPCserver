<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:85:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\advertise\index.html";i:1508311444;s:83:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\common\header.html";i:1508310960;s:81:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\public\head.html";i:1508310960;s:101:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\advertise\header_img\header_img.html";i:1508310960;s:101:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\advertise\why_select\why_select.html";i:1508310960;s:119:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\advertise\app_advertise_forms\app_advertise_forms.html";i:1508310960;s:131:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\advertise\app_advertise_publication\app_advertise_publication.html";i:1508310960;s:81:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\public\foot.html";i:1508310960;s:83:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\common\footer.html";i:1508310960;}*/ ?>
<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!--引入公共头部-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			*{
				margin: 0px;
				padding: 0px;
				border: 0px;
			}
		</style>
		<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/vue/2.4.2/vue.min.js"></script>
		<script src="https://cdn.bootcss.com/vue-router/2.7.0/vue-router.min.js"></script>
	</head>
	<body>
	


<!--引入公共导航头部-->

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
	

<!--引入头部图片-->
<div class="header_img">
	<img src="__STATIC_PATH__/static/advertise/images/banner.png" />
</div>
<style type="text/css">
	.header_img{
		margin-top: 80px;
	}
	.header_img img{
		width: 100%;
	}
</style>

<!--引入为什么选择-->
<div class="why_select">
	<h1>为什么要选择乐住智慧小区？</h1>
	<h5>Why choose to live in the wisdom of the community?</h5>
	<ul>
		<li>
			<img src="__STATIC_PATH__/static/advertise/images/ad1.png"/>
			<div class="h3_p">
				<h3>精准目标受众</h3>
				<p>楼盘消费层次定位，根据消费目标客户群选择不同阶层咯盘定位。</p>
			</div>
		</li>
		<li>
			<img src="__STATIC_PATH__/static/advertise/images/ad2.png"/>
			<div class="h3_p">
				<h3>物业系统通报</h3>
				<p>业主居家必备生活工具,业主水、点、燃气、停车费、物业费缴纳必用<br>钥匙和工具。</p>
			</div>
		</li>
		<li>
			<img src="__STATIC_PATH__/static/advertise/images/ad3.png"/>
			<div class="h3_p">
				<h3>有效传播时段</h3>
				<p>按装修入住进程传播，从入伙到装修到入住，根据业主生活需求分阶<br>段营销。</p>
			</div>
		</li>
		<li>
			<img src="__STATIC_PATH__/static/advertise/images/ad4.png"/>
			<div class="h3_p">
				<h3>实名用户数据</h3>
				<p>清晰量化的广告效果，APP受众均为实名制业主，营销效果量化可<br>计。</p>
			</div>
		</li>
	</ul>
</div>

<style type="text/css">
	.why_select{
		margin-top: 70px;
		padding: 0px 20px;
	}
	.why_select h1{
		font-size: 36px;
		text-align: center;
	}
	.why_select h5{
		text-align: center;
		font-size: 14px;
		color: #aaa;
		font-weight: normal;
	}
	.why_select ul{
		overflow: hidden;
		margin-top: 55px;
	}
	.why_select ul li{
		list-style: none;
		float: left;
		width: 48%;
		height: 580px;
		font-size: 20px;
	}
	.why_select ul li:nth-child(1),.why_select ul li:nth-child(3){
		margin-right: 4%;		
	}
	.why_select ul li img{
		width: 100%;
		margin-bottom: 30px;
	}
	.why_select ul li .h3_p h3{
		color: #333;
	}
	.why_select ul li .h3_p p{
		color: #3D3D3D;
		line-height: 26px;
	}
</style>

<!--引入为什么app广告展示-->
<div class="app_advertise_forms">
	<h1>APP广告展现形式</h1>
	<h5>APP advertisiing forms</h5>
	<ul>
		<li>
			<img src="__STATIC_PATH__/static/advertise/images/ad5.png"/>
			<div class="h3_p">
				<h3>启动页/全屏广告</h3>
				<div class="word_center">
					<p>强烈的视觉冲击力，瞬间捕获注意力，品牌信息充分曝光。</p>
				</div>
				
			</div>
		</li>
		<li>
			<img src="__STATIC_PATH__/static/advertise/images/ad6.png"/>
			<div class="h3_p">
				<h3>弹屏互动广告/插屏广告</h3>
				<div class="word_center">
				<p>视觉冲击力强，定位精准，阅读和点击率高，效果明显。</p>
				</div>
			</div>
		</li>
		<li>
			<img src="__STATIC_PATH__/static/advertise/images/ad7.png"/>
			<div class="h3_p">
				<h3>领券中心banner广告</h3>
				<div class="word_center">
				<p>弹出红点提示，强制性点击查看，阅读和点击率高。</p>
				</div>
			</div>
		</li>
		<li>
			<img src="__STATIC_PATH__/static/advertise/images/ad8.png"/>
			<div class="h3_p">
				<h3>banner广告</h3>
				<div class="word_center">
				<p>图文结合，展示直观，快速捕获注意力，曝光明显。</p>
				</div>
			</div>
		</li>
		<li>
			<img src="__STATIC_PATH__/static/advertise/images/ad9.png"/>
			<div class="h3_p">
				<h3>信息流大图广告</h3>
				<div class="word_center">
				<p>大图+文字，小图+文字，广告位置多，展现次数多</p>
				</div>
			</div>
		</li>
		<li>
			<img src="__STATIC_PATH__/static/advertise/images/ad10.png"/>
			<div class="h3_p">
				<h3>APP消息推送广告</h3>
				<div class="word_center">
				<p>精准目标受众定向推送，精准用户群，直链广告页面。</p>
				</div>
			</div>
		</li>
		<li>
			<img src="__STATIC_PATH__/static/advertise/images/ad11.png"/>
			<div class="h3_p">
				<h3>电梯框架、灯箱广告</h3>
				<div class="word_center">
				<p>高收入人群，阅读次数多，广告是唯一的消费刺激物。</p>
				</div>
			</div>
		</li>
		<li>
			<img src="__STATIC_PATH__/static/advertise/images/ad12.png"/>
			<div class="h3_p">
				<h3>业主手册/内页广告</h3>
				<div class="word_center">
				<p>精准锁定目标群里，100%到达率，每户必备一册。</p>
				</div>
			</div>
		</li>
	</ul>
</div>

<style type="text/css">
	.app_advertise_forms{
		margin-top: 70px;
		padding: 75px 20px 0px 20px;
		background: #f5f5fc;
	}
	.app_advertise_forms h1{
		font-size: 36px;
		text-align: center;
	}
	.app_advertise_forms h5{
		text-align: center;
		font-size: 14px;
		color: #aaa;
		font-weight: normal;
	}
	.app_advertise_forms ul{
		overflow: hidden;
		margin-top: 55px;
	}
	.app_advertise_forms ul li{
		list-style: none;
		float: left;
		width: 23.5%;
		height: 400px;
		border: 1px solid #ddd;
		box-sizing: border-box;
		margin-right: 2%;	
		margin-bottom: 60px;
	}
	.app_advertise_forms ul li:nth-child(4),.app_advertise_forms ul li:nth-child(8){
		margin-right: 0;		
	}
	.app_advertise_forms ul li img{
		width: 100%;
	}
	.app_advertise_forms ul li .h3_p{
		
	}
	.app_advertise_forms ul li .h3_p h3{
		color: #333;
		text-align: center;
		padding: 20px 0px;
		font-size: 20px;
	}
	.app_advertise_forms ul li .h3_p .word_center{
		width: 214px;
		margin-left: calc(50% - 107px);
	}
	.app_advertise_forms ul li .h3_p p{
		color: #3D3D3D;
		text-align: center;
		font-size: 16px;
	}
</style>

<!--引入为什么app广告刊例-->
<div class="app_advertise_publication">
	<h1>APP广告刊例</h1>
	<h5>APP Advertisiing Publications</h5>
	<img src="__STATIC_PATH__/static/advertise/images/ad13.png"/>
</div>

<style type="text/css">
	.app_advertise_publication{
		margin-top: 80px;
		padding: 0px 20px;
	}
	.app_advertise_publication h1{
		font-size: 36px;
		text-align: center;
	}
	.app_advertise_publication h5{
		text-align: center;
		font-size: 14px;
		color: #aaa;
		font-weight: normal;
	}
	.app_advertise_publication img{
		width: 100%;
		margin-top: 50px;
	}
</style>

<!--引入公共导航尾部-->
<div class="bc_navlistbar ">
	<div class="footer"><!-- 底部 -->
		<div class="foot_l">
			<h4>产品简介</h4>
			<div>
                <p><a href="#">智能小区体验馆</a></p>
                <p><a href="#">交房验房系统</a></p>
                <p><a href="#">网上物业系统</a></p>
                <p><a href="#">社区运营</a></p>
            </div>
		</div>
		<div class="foot_l">
			<h4>加盟合作</h4>
            <div>
                <p><a href="#">品牌概念</a></p>
                <p><a href="#">市场前景</a></p>
                <p><a href="#">盈利分析</a></p>
                <p><a href="#">人群分析</a></p>
                <p><a href="#">合作伙伴</a></p>
                <p><a href="#">合作流程</a></p>
            </div>
		</div>
		<div class="foot_l">
			<h4>新闻动态</h4>
            <div>
                <p><a href="#">媒体报道</a></p>
                <p><a href="#">企业动态</a></p>
            </div>
		</div>
		<div class="foot_l">
			<h4>企业简介</h4>
            <div>
                <p><a href="#">企业介绍</a></p>
                <p><a href="#">发展历程</a></p>
                <p><a href="#">荣誉资质</a></p>
                <p><a href="#">联系我们</a></p>
            </div>
		</div>
		<div class="foot_r">
			<p>全国招商热线：400-8090-590</p>
			<div class="foot_r1">
				<img src="__STATICPATH__/static/images/nav_foot/foot_r1.png" alt="">
				<p>乐住业主APP</p>
			</div>
			<div class="foot_r2">
				<img src="__STATICPATH__/static/images/nav_foot/foot_r2.jpg" alt="">
				<p>微信下载二维码</p>
			</div>
		</div>
		<p>copyright©2012-2108版权所有 乐住网络服务有限公司 湘ICP 备B2-20140080</p>
	</div>
</div>
	

<!--引入公共尾部-->

	</body>
</html>

