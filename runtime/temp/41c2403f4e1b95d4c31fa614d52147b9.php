<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:121:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\newslist\index.html";i:1508291207;s:118:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\public\head.html";i:1508299354;s:118:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\public\foot.html";i:1508299701;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="Content-Language" content="zh-cn" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=0">
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script> 
 	<script src="https://cdn.bootcss.com/vue/2.4.4/vue.min.js"></script>
	<title>新闻动态</title>
	<link type="text/css" rel="stylesheet" href="__STATICPATH__/static/css/xwdongtai.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
	<script type="text/javascript" src="__STATICPATH__/static/js/xwdongtai.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
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
	
	<div class="xinwen">
		<div class="xw_head">
			<img src="__STATICPATH__/static/images/newslist/xinwen02.png" alt="">
			<span>新闻动态</span>
		</div>
		
		<div class="lunbo"> <!-- 轮播图 -->
				<div class="swiper-container">
					<div class="swiper-button-prev swiper-button-black"></div>
   					<div class="swiper-wrapper">
     		   		 	<div class="swiper-slide">
     		   		 		<h3>"荣归·壹城"暨乐住打造的"悦昇活"APP正式上线！</h3>
							<p>文章来源&nbsp;&nbsp;&nbsp;发布日期：2017-10-09</p>
     		   		 		<img src="__STATICPATH__/static/images/newslist/xinwen03.png" alt="">
     		   		 		<p class="neirong">秋风微凉，心却温暖如春，走过最幸福的一条路，就是回家的路。欢...</p>
     		   		 	</div>
     		   		 	<div class="swiper-slide">
     		   		 		<h3>互联网+物业只是智能设备？那你就错过了精髓了！</h3>
							<p>文章来源&nbsp;&nbsp;&nbsp;发布日期：2017-09-12</p>
     		   		 		<img src="__STATICPATH__/static/images/newslist/xinwen05.png" alt="">
     		   		 		<p class="neirong">随着互联网+、智能科技的结合，物业管理正向智慧小区转变和提升...</p>
     		   		 	</div>
     		   		 	<div class="swiper-slide">
     		   		 		<h3>房地产市场进入白银时代，智慧小区来助力！</h3>
							<p>文章来源&nbsp;&nbsp;&nbsp;发布日期：2017-09-22</p>
     		   		 		<img src="__STATICPATH__/static/images/newslist/xinwen04.png" alt="">
     		   		 		<p class="neirong">政府几轮限购政策出台，北京房价2个月未上涨，合肥炒房团被套等...</p>
     		   		 	</div>
      		    	</div>
      		   		<div class="swiper-button-next swiper-button-black"></div>
  				</div>
		</div>
		<div class="xiangqing"> <!-- 论坛 -->
			<ul>
				<li>
					<div class="xq_l">
						<img src="__STATICPATH__/static/images/newslist/xinwen03.png" alt="">
					</div>
					<div class="xq_r xq_r1">
						<h4>"荣归·壹城"暨乐住打造的"悦昇活"APP正式上线！</h4>
						<span>2017-10-09</span>
						<p>秋风微凉，心却温暖如春，走过最幸福的一条路，就是回家的路。欢迎回家，幸福起航关键词："荣归·壹城"暨乐住打造的"悦昇活"APP正式上线！</p>
					</div>
				</li>
				<li>
					<div class="xq_l">
						<img src="__STATICPATH__/static/images/newslist/xinwen04.png" alt="">
					</div>
					<div class="xq_r xq_r2">
						<h4>房地产市场进入白银时代，智慧小区来助力！</h4>
						<span>2017-09-22</span>
                        <p>政府几轮限购政策出台，北京房价2个月未上涨，合肥炒房团被套等，政府大力发展住房租赁市场，房产市场的销售是开发商新晋的难题。关键词：房地产，智慧小区体验馆</p>
					</div>
				</li>
				<li>
					<div class="xq_l">
						<img src="__STATICPATH__/static/images/newslist/xinwen05.png" alt="">
					</div>
					<div class="xq_r xq_r3">
						<h4>互联网+物业只是智能设备？那你就错过了精髓了！</h4>
						<span>2017-09-12</span>
                        <p>随着互联网+、智能科技的结合，物业管理正向智慧小区转变和提升。传统的物业管理及办公系统，在大数据时代的冲击下，高科技、高品质的建筑楼盘，倒逼物业改革与前进。全面...关键词：互联网+物业，智慧物业</p>
					</div>
				</li>
				<li>
					<div class="xq_l">
						<img src="__STATICPATH__/static/images/newslist/xinwen06.png" alt="">
					</div>
					<div class="xq_r xq_r4">
						<h4>2017年长沙市新交房楼盘统计表（下半年）</h4>
						<span>2017-09-04</span>
                        <p>1.以下为2017年下半年长沙市新交房楼盘统计，无论是从营销角度或者是购房角度，都可以过来围观下，楼盘位置、价格、交房时间、面积等一应俱全。关键词：<!-- 最新楼盘 -->最新楼盘</p>
					</div>
				</li>
				<li>
					<div class="xq_l">
						<img src="__STATICPATH__/static/images/newslist/xinwen07.png" alt="">
					</div>
					<div class="xq_r xq_r5">
						<h4>2017年新楼盘交流会，燃爆明昇壹城！</h4>
						<span>2017-09-04</span>
                        <p>今天，乐住举办的“2017年新楼盘交流会”，邀请了家装、建材行业的科勒、欧普、约克中央空调、名仕大宅、Voc智能锁等品牌负责人进行交流与探讨，与小区物业集团物业...关键词：<!-- 验房系统，交房系统 -->验房系统，交房系统</p>
					</div>
				</li>
				<li>
					<div class="xq_l">
						<img src="__STATICPATH__/static/images/newslist/xinwen08.png" alt="">
					</div>
					<div class="xq_r xq_r6">
						<h4>行业揭秘 | 2017年长沙下半年家装建材行业营销大事</h4>
						<span>2017-08-31</span>
                        <p>在金九银十，长沙楼市将迎来旺季，开发商推盘节奏明显加快，意欲抢占“金九”先机。据不完全统计，2017年下半年将有40多个项目楼盘开盘，优质高端楼盘高铁南商圈的“...关键词：<!-- 乐住 -->乐住</p>
					</div>
				</li>
				<li>
					<div class="xq_l">
						<img src="__STATICPATH__/static/images/newslist/xinwen09.png" alt="">
					</div>
					<div class="xq_r xq_r7">
						<h4>互联网新环境下，造就乐住智慧社区新模式</h4>
						<span>2017-06-08</span>
                        <p>互联网新环境下，造就乐住智慧社区新模式，乐住面向全国招商加盟，招城市代理商与经销商，电话：400-8090-590。关键词：乐住智慧社区，智慧社区建造，智慧社区...关键词：<!-- 乐住智慧社区，智慧社区建造，智慧社区新模式，智慧社区代理。 -->乐住智慧社区，智慧社区建造，智慧社区新模式，智慧社区代理。</p>
					</div>
				</li>
				<li>
					<div class="xq_l">
						<img src="__STATICPATH__/static/images/newslist/xinwen10.png" alt="">
					</div>
					<div class="xq_r xq_r8">
						<h4>建设乐住智慧社区的重要因素</h4>
						<span>2017-06-07</span>
                        <p>建设乐住智慧社区的重要因素，乐住面向全国招商加盟，招代理商与经销商，电话：400-8090-590。关键词：乐住智慧社区，智慧社区建设​，智慧社区发展，智慧社区...关键词：<!-- 乐住智慧社区，智慧社区建设​，智慧社区发展，智慧社区实施. -->乐住智慧社区，智慧社区建设​，智慧社区发展，智慧社区实施.</p>
					</div>
				</li>
				<li>
					<div class="xq_l">
						<img src="__STATICPATH__/static/images/newslist/xinwen11.png" alt="">
					</div>
					<div class="xq_r xq_r9">
						<h4>习近平：积极推动我国智慧社区生产和消费革命</h4>
						<span>2017-06-06</span>
                        <p>积极推动我国智慧社区生产和消费革命，乐住智慧社区面向全国招商加盟，招代理商与运营商，电话：400-8090-590。关键词：乐住智慧社区，智慧社区代理​，智慧社...关键词：<!-- 乐住智慧社区，智慧社区代理​，智慧社区合作，智慧社区创业。 -->乐住智慧社区，智慧社区代理​，智慧社区合作，智慧社区创业。</p>
					</div>
				</li>
				<li>
					<div class="xq_l">
						<img src="__STATICPATH__/static/images/newslist/xinwen12.png" alt="">
					</div>
					<div class="xq_r xq_r10">
                        <h4>物业如何选择并看待乐住智慧社区</h4>
                        <span>2017-06-05</span>
                        <p>物业如何选择看待乐住智慧社,乐住面向全国招商加盟，招城市运营商与经销商，电话：400－8090－590。区关键词：乐住智慧社区，乐住智慧物业，智慧社区代理，智慧...关键词：<!-- 乐住智慧社区，乐住智慧物业，智慧社区代理，智慧社区加盟。 -->乐住智慧社区，乐住智慧物业，智慧社区代理，智慧社区加盟。</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="mulu"> <!-- 底部目录 -->
			<div>
				<span>100</span>条记录&nbsp;&nbsp;
				<span>1</span>/10&nbsp;页&nbsp;&nbsp;
				<a href="#">上一页</a>
				<a href="#">下一页</a>
				<a class="active">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a>4</a>
				<a>5</a>
				<a>下5页</a>
				<a>最后一页</a>
			</div>
		</div>
	</div>
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
	
	<script>        
  		var mySwiper = new Swiper ('.swiper-container', {
    		direction: 'horizontal',
    		loop: true,
    		prevButton:'.swiper-button-prev',
			nextButton:'.swiper-button-next',
			autoplay : 4000,
			effect : 'fade',
			fade: {
  				crossFade: true,
			}
    	})
    </script>
</body>
</html>