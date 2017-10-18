<?php if (!defined('THINK_PATH')) exit(); /*a:18:{s:125:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\index.html";i:1508297320;s:120:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\common\header.html";i:1508295703;s:118:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\public\head.html";i:1508299354;s:141:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\header_img\header_img.html";i:1508295563;s:145:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\fixed_navbar\fixed_navbar.html";i:1508297957;s:155:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\trademark_concept\trademark_concept.html";i:1508295563;s:151:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\market_prospect\market_prospect.html";i:1508297455;s:141:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\why_select\why_select.html";i:1508297704;s:147:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\lezhu_product\lezhu_product.html";i:1508297626;s:139:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\tv_report\tv_report.html";i:1508297669;s:147:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\profit_budget\profit_budget.html";i:1508297646;s:145:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\welcome_join\welcome_join.html";i:1508297687;s:161:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\cooperation_relation\cooperation_relation.html";i:1508297578;s:163:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\cooperation_advantage\cooperation_advantage.html";i:1508297519;s:159:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\cooperation_process\cooperation_process.html";i:1508297547;s:141:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\cityopration\change_bar\change_bar.html";i:1508295563;s:118:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\public\foot.html";i:1508291207;s:120:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\common\footer.html";i:1508295703;}*/ ?>
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
	
</div>
<style type="text/css">
	.header_img{
		background: url('__STATIC_PATH__/static/cityopration/images/banner.jpg') center no-repeat;
		width: 100%;
		height: 400px;
		margin-top: 80px;
	}
</style>

<!--引入固定导航条-->
<div class="fixed_navbar">
	<ul>
		<li>
			<a href="#trademark_concept" name="trademark_concept" class="none">品牌概念</a>
		</li>
		<li>
			<a href="#market_prospect" name="market_prospect" class="none">市场前景</a>
		</li>
		<li>
			<a href="#why_select" name="why_select" class="bright">选择意义</a>
		</li>
		<li>
			<a href="#lezhu_product" name="lezhu_product" class="none">乐住产品</a>
		</li>
		<li>
			<a href="#tv_report" name="tv_report" class="none">媒体报道</a>
		</li>
		<li>
			<a href="#profit_budget" name="profit_budget" class="none">盈利分析</a>
		</li>
		<li>
			<a href="#welcome_join" name="welcome_join" class="none">人群分析</a>
		</li>
		<li>
			<a href="#cooperation_relation" name="cooperation_relation" class="none">合作伙伴</a>
		</li>
		<li>
			<a href="#cooperation_advantage" name="cooperation_advantage" class="none">加盟优势</a>
		</li>
		<li>
			<a href="#cooperation_process" name="cooperation_process" class="none">加盟流程</a>
		</li>
	</ul>
</div>

<style type="text/css">
	.fixed_navbar{
		width: 100%;
		height: 60px;
		background: #49d075;
		padding: 0px 20px;
		box-sizing: border-box;
		z-index: 100;
	}
	.fixed_navbar ul{
		width: 100%;
		overflow: hidden;
	}
	.fixed_navbar ul li{
		float: left;
		list-style: none;
		line-height: 60px;
		width: 10%;
		text-align: center;
		cursor: pointer;
	}
	.fixed_navbar ul li a{
		display: block;
		height: 60px;
		color: white;
		font-size: 16px;
		text-decoration: none;
	}
	.fixed_navbar ul li:hover a{
		background: #f0f9f1;
		color: #333;
	}
	.fixedclass{
		position: fixed;
		top: 80px;
	}
</style>

<script type="text/javascript">
	var getBar=$('.fixed_navbar ul');
	var getBartop=getBar.offset().top;
	$(window).scroll(function(){
		var H=$(document).scrollTop();
		if(H>getBartop-80){
			$('.fixed_navbar').addClass('fixedclass');
		}
		else{
			$('.fixed_navbar').removeClass('fixedclass');
		}
	})
</script>

<!--引入品牌概念-->
<div class="trademark_concept">
	<a id="trademark_concept" name="trademark_concept"></a>
	<div class="many_word">
		<div class="h1_p">
			<h1>品牌概念</h1>
			<p>什么是智慧小区？</p>
		</div>
		<div class="one_p">
			<p>乐住智慧小区是基于小区服务场景以小区业主为中心，使用互联网和物联 网应用将小区业主、物业服务公司、小区公共区域的设备、小区周边商业 链接起来，实现人、设备、服务的互联互通，从而实现一个让业主满意， 物业服务高质高效，小区商圈体验智能化的小区服务生态。</p>
		</div>
		<div class="one_h2">
			<h2>乐住,小区生态链的“连接器”</h2>			
		</div>
	</div>
	<div class="img_right">
		<img src="__STATIC_PATH__/static/cityopration/images/brand-img.jpg"/>
	</div>
</div>

<style type="text/css">
	.trademark_concept{
		/*margin-top: 105px;*/
		padding: 0px 40px;
		padding-top: 105px;
		overflow: hidden;
		position: relative;
	}
	.trademark_concept .many_word{
		width: 460px;
		float: left;
	}
	.trademark_concept .many_word .h1_p{
		margin-bottom: 50px;
	}
	.trademark_concept .many_word .h1_p h1{
		font-size: 36px;
		font-weight: 200;
		color: #333;
	}
	.trademark_concept .many_word .h1_p p{
		font-size: 14px;
		color: #AAAAAA;
	}
	.trademark_concept .many_word .one_p{
		margin-bottom: 50px;
	}
	.trademark_concept .many_word .one_p p{
		font-size: 16px;
		color: #3D3D3D;
	}
	.trademark_concept .many_word .one_h2 h2{
		font-size: 30px;
		color: #333;
		font-weight: 200;
	}
	.trademark_concept .img_right{
		margin-top: 30px;
		margin-left: 150px;
		float: left;
	}
	/*瞄点链接*/
	.trademark_concept #trademark_concept{
		position: absolute;
		top: -140px;
	}
</style>

<!--引入市场前景-->
<div class="market_prospect">
	<a id="market_prospect" name="market_prospect"></a>
	<div class="zr_header">
		<h1>市场前景</h1>
		<p>下一个十年，为什么是智慧小区</p>
		<div class="bar_bottom"></div>
	</div>
	<div class="many_p">
		<p>1.房产现状：住宅小区智能化、互联网化已是大势所趋，全国各地开发商有意提升楼盘居住舒适度、科技化和人性化服务作为楼盘销售的新亮点，以万科、绿城、绿地等地产为先期代 表纷纷抛出智慧、互联网+等概念，旨在打造城市住宅的全新风向标；</p>
		<p>2.物业现状：物业竞争日趋激烈，提升服务水平势在必行；物业缺乏合适的平台与业主进行互动，物业与业主缺少沟通，导致业主不理解物业所做工作；物业缺乏新的利润增长点来改 善运营。业主消费需求、提高倒逼物业物业改变管理方式、服务手段。</p>
		<p>3.业主需求：国外社区商业发展如火如荼，随着业主消费水平、消费理念的提高与转变，急需出现一个能整合商家、物业、业主于一体社区平台，提升业主办事效率，实现社区快捷生 活服务。</p>
	</div>
	<div class="word_img">
		<div class="two_p">
			<p>根据安居客房源信息：</p>
			<p>15个新一线城市中高端楼盘约15000个，30个二线城市中高端楼盘为20000个，按1000户/楼盘，3.5万个楼盘，按平均2人一户，7000万住户每月产生500元水电煤生活缴费，日常生活支出1000元/月。月基础生活消费额为7000万*1500=1050亿，通过智慧小区挖掘包含家庭保健类、旅游类、文化类、享乐类消费产品，通过智慧小区的运用，撬动万亿市场的发展。</p>
		</div>
		<div class="two_img">
			<div class="one_img">
				<p>1050亿</p>
				<p>市场容量对比</p>
				<p>1亿</p>
				<img src="__STATIC_PATH__/static/cityopration/images/arrow4.jpg"/>
			</div>
			<div class="one_img">
				<p>35000个</p>
				<p>智慧楼盘对比</p>
				<p>200个</p>
				<img src="__STATIC_PATH__/static/cityopration/images/arrow4.jpg"/>
			</div>
		</div>
	</div>
	<div class="one_h1">
		<h1>你想来掘这桶金吗？</h1>
	</div>
</div>

<style type="text/css">
	.market_prospect{
		margin-top: 120px;
		color: #fff;
		background: #21253c;
		padding: 0px 15px;
		position: relative;
	}
	/*头部*/
	.market_prospect .zr_header{
		padding: 60px 0px 40px 0px;
		text-align: center;
	}
	.market_prospect .zr_header h1{
		font-weight: 500;
		font-size: 36px
	}
	.market_prospect .zr_header .bar_bottom{
		width: 50px;
		height: 2px;
		background: #44b13f;
		margin:auto;
		margin-top: 15px;
		transition: all 0.6s;
	}
	.market_prospect .zr_header:hover .bar_bottom{
		width: 80px;
	}
	/*多个p*/
	.market_prospect .many_p p{
		line-height: 26px;
		margin-bottom: 25px;
	}
	/*一个小盒子*/
	.market_prospect .word_img{
		background: #2d2f3c;
		padding: 60px 60px 20px 60px;
		overflow: hidden;
	}
	.market_prospect .word_img .two_p{
		width: 577px;
		float: left;
		margin-right: 30px;
	}
	.market_prospect .word_img .two_p p{
		line-height: 44px;
	}
	.market_prospect .word_img .two_img{
		float: left;
		overflow: hidden;
		margin-top: 50px;
	}
	.market_prospect .word_img .two_img .one_img{
		float: left;
		position: relative;
		width: 230px;
		height: 230px;
		margin-left: 60px;
	}
	.market_prospect .word_img .two_img .one_img img{
		border-radius: 50%;
		position: absolute;
		left: 50px;
		top: 50px;
	}
	.market_prospect .word_img .two_img .one_img p{
		position: absolute;
	}
	.market_prospect .word_img .two_img .one_img p:nth-child(1){
		left: 0px;
		top: 40px;
	}
	.market_prospect .word_img .two_img .one_img p:nth-child(2){
		left: 60px;
		top: 5px;
	}
	.market_prospect .word_img .two_img .one_img p:nth-child(3){
		left: 175px;
		top: 145px;
	}
	/*底部h1*/
	.market_prospect .one_h1 h1{
		padding: 20px 0px;
		text-align: center;
		font-weight: 200;
	}
	/*瞄点链接*/
	.market_prospect #market_prospect{
		position: absolute;
		top: -140px;
	}
</style>

<!--引入选择意义-->
<div class="why_select">
	<a id="why_select" name="why_select"></a>
	<div class="zr_header">
		<h1>选择意义</h1>
		<p>为什么要做智慧小区？</p>
		<div class="bar_bottom"></div>
	</div>
	<div class="img_word">
		<div class="img_left">
			<img src="__STATIC_PATH__/static/cityopration/images/role.png"/>
		</div>
		<div class="word_right">
			<div class="h4_p">
				<h4>开发商：打造销售亮点，提升楼盘整体价值。</h4>
				<p>白银时代的楼盘竞争，不再仅限于地段、位置、配套设施，楼盘居住舒适度，服务智能化和人性化将成为竞争的新势力。</p>
			</div>
			<div class="h4_p">
				<h4>物业：以现代化服务手段，提升业主满意度与物业口碑。</h4>
				<p>传统纸质化办公，效率低、人工成本高，物业与业主沟通受限，报事报修问题解决慢，物业缴费率不高等问题。</p>
			</div>
			<div class="h4_p">
				<h4>业主：一部手机刷遍小区里，提升幸福指数。</h4>
				<p>水、电、物业费缴费，报事报修，小区智能设施使用，生活服务订购，线上超市等服务，足不出小区即可实现。</p>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	/*头部*/
	.why_select{
		color: #3D3D3D;
		padding: 0px 15px;
		padding-bottom: 20px;
		position: relative;
	}
	.why_select .zr_header{
		padding: 60px 0px 40px 0px;
		text-align: center;
	}
	.why_select .zr_header h1{
		font-weight: 500;
		font-size: 36px
	}
	.why_select .zr_header .bar_bottom{
		width: 50px;
		height: 2px;
		background: #44b13f;
		margin:auto;
		margin-top: 15px;
		transition: all 0.6s;
	}
	.why_select .zr_header:hover .bar_bottom{
		width: 80px;
	}
	/*内容*/
	.why_select .img_word{
		overflow: hidden;
	}
	.why_select .img_word .img_left{
		float: left;
		margin-right: 120px;
	}
	.why_select .img_word .word_right{
		float: left;
		width: 640px;
	}
	.why_select .img_word .word_right .h4_p{
		margin-bottom: 35px;
	}
	.why_select .img_word .word_right .h4_p h4{
		font-size: 20px;
		color: #333;
		font-weight: 200;
		line-height: 44px;
	}
	.why_select .img_word .word_right .h4_p p{
		font-size: 16px;
		color: #777;
		line-height: 22px;
	}
	/*瞄点链接*/
	.why_select #why_select{
		position: absolute;
		top: -140px;
	}
</style>

<!--引入乐住产品-->
<div class="lezhu_product">
	<a id="lezhu_product" name="lezhu_product"></a>
	<div class="zr_header">
		<h1>乐住产品</h1>
		<p>楼盘全链条解决产品</p>
		<div class="bar_bottom"></div>
	</div>
	<div class="img_container">
		<img src="__STATIC_PATH__/static/cityopration/images/chain.png"/>
	</div>
</div>

<style type="text/css">
	/*头部*/
	.lezhu_product{
		color: #3D3D3D;
		background: url('__STATIC_PATH__/static/cityopration/images/brand-bg1.jpg') center no-repeat;
		width: 100%;
		height: 720px;
		color: white;
		position: relative;
	}
	.lezhu_product .zr_header{
		padding: 60px 0px 40px 0px;
		text-align: center;
	}
	.lezhu_product .zr_header h1{
		font-weight: 500;
		font-size: 36px
	}
	.lezhu_product .zr_header p{
		font-size: 16px;
	}
	.lezhu_product .zr_header .bar_bottom{
		width: 50px;
		height: 2px;
		background: #44b13f;
		margin:auto;
		margin-top: 15px;
		transition: all 0.6s;
	}
	.lezhu_product .zr_header:hover .bar_bottom{
		width: 80px;
	}
	/*图片容器*/
	.lezhu_product .img_container{
		margin-top: 20px;
	}
	.lezhu_product .img_container img{
		width: 100%;
	}
	/*瞄点链接*/
	.lezhu_product #lezhu_product{
		position: absolute;
		top: -140px;
	}
</style>

<!--引入央视等大型媒体报道-->
<div class="tv_report">
	<a id="tv_report" name="tv_report"></a>
	<div class="zr_header">
		<h1>央视等大型媒体报道</h1>
		<p>乐住产品影响深远</p>
		<div class="bar_bottom"></div>
	</div>
	<div class="video_container">
		<ul>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/video-image1.png"/>
				<div class="one_p">
					<p>“智慧小区 因你而来”</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/video-image2.png"/>
				<div class="one_p">
					<p>中央13台《面对面》（乐住专访）</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/video-image3.png"/>
				<div class="one_p">
					<p>中央7台《致富经》（乐住专访）</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/video-image4.png"/>
				<div class="one_p">
					<p>“智慧小区”指导意见出台 开创物业管理新模式</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/video-image5.png"/>
				<div class="one_p">
					<p> “互联网+小区”街头采访</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/video-image6.png"/>
				<div class="one_p">
					<p>乐住智慧小区-湖南卫视新闻-社区生活装进手机里</p>
				</div>
			</li>
		</ul>
	</div>
</div>

<style type="text/css">
	/*头部*/
	.tv_report {
		padding: 0px 15px;
		color: #3D3D3D;
		position: relative;
	}
	.tv_report .zr_header{
		padding: 60px 0px 40px 0px;
		text-align: center;
	}
	.tv_report .zr_header h1{
		font-weight: 500;
		font-size: 36px
	}
	.tv_report .zr_header p{
		font-size: 16px;
	}
	.tv_report .zr_header .bar_bottom{
		width: 50px;
		height: 2px;
		background: #44b13f;
		margin:auto;
		margin-top: 15px;
		transition: all 0.6s;
	}
	.tv_report .zr_header:hover .bar_bottom{
		width: 80px;
	}
	/*视频容器*/
	.tv_report .video_container ul{
		width: 100%;
		overflow: hidden;
	}
	.tv_report .video_container ul li{
		float: left;
		width: 30%;
		height: 300px;
		margin-right: 5%;
		list-style: none;
		cursor: pointer;
		margin-bottom: 75px;
		padding: 2px;
		box-sizing: border-box;
		transition: all 0.6s;
		position: relative;
	}
	.tv_report .video_container ul li:hover .one_p p{
		color: #49D075;
	}
	.tv_report .video_container ul li:hover{
		padding: 0;
	}
	.tv_report .video_container ul li:hover img{
		opacity: .95;
	}
	.tv_report .video_container ul li:nth-child(3n){
		margin-right: 0;
	}
	.tv_report .video_container ul li img{
		width: 100%;
		border: 10px solid #dedede;
		box-sizing: border-box;
		border-radius: 5px;
		transition: all 0.6s;
	}
	.tv_report .video_container ul li .one_p{
		position: absolute;
		width: 100%;
		left: 0;
		bottom: 0;
	}
	.tv_report .video_container ul li .one_p p{
		text-align: center;
		color: #3D3D3D;
		line-height: 35px;
	}
	/*瞄点链接*/
	.tv_report #tv_report{
		position: absolute;
		top: -140px;
	}
</style>

<!--引入盈利预算-->
<div class="profit_budget">
	<a id="profit_budget" name="profit_budget"></a>
	<div class="zr_header">
		<h1>盈利预算</h1>
		<p>PROFIT BUDGET</p>
		<div class="bar_bottom"></div>
	</div>
	<div class="set_padding">
		<div class="form_show">
			<table border="1" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<th>服务楼盘</th>
						<th>所需团队与规模</th>
						<th>预计成本</th>
						<th>最小毛利率</th>
					</tr>
					<tr>
						<td>服务10个楼盘</td>
						<td>3</td>
						<td>1万/月</td>
						<td>最小毛利润约为：<span>50万</span></td>
					</tr>
					<tr>
						<td>服务30个楼盘</td>
						<td>5</td>
						<td>2万/月</td>
						<td>最小毛利润约为：<span>200万</span></td>
					</tr>
					<tr>
						<td>服务50个楼盘</td>
						<td>10-12</td>
						<td>5万/月</td>
						<td>最小毛利润约为：<span>450万</span></td>
					</tr>
					<tr>
						<td>服务100个楼盘</td>
						<td>15-20</td>
						<td>10万/月</td>
						<td>最小毛利润约为：<span>800万</span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<style type="text/css">
	/*头部*/
	.profit_budget{
		background: url('__STATIC_PATH__/static/cityopration/images/brand-bg3.jpg') center no-repeat;
		width: 100%;
		height: 810px;
		color: white;
		position: relative;
	}
	.profit_budget .zr_header{
		padding: 60px 0px 40px 0px;
		text-align: center;
	}
	.profit_budget .zr_header h1{
		font-weight: 500;
		font-size: 36px
	}
	.profit_budget .zr_header p{
		font-size: 16px;
	}
	.profit_budget .zr_header .bar_bottom{
		width: 50px;
		height: 2px;
		background: #44b13f;
		margin:auto;
		margin-top: 15px;
		transition: all 0.6s;
	}
	.profit_budget .zr_header:hover .bar_bottom{
		width: 80px;
	}
	/*表单呈现*/
	.profit_budget .set_padding{
		padding: 0px 15px;
	}
	.profit_budget .set_padding .form_show{
		width: 100%;
		min-height: 510px;
		background: #FFFFFF;
		color: #3D3D3D;
	}
	.profit_budget .set_padding .form_show table{
		width: 100%;
		text-align: center;
	}
	.profit_budget .set_padding .form_show table tr{
		height: 100px;
		line-height: 100px;
	}
	.profit_budget .set_padding .form_show table tr:nth-child(2n){
		background: #f4f4f4;
	}
	.profit_budget .set_padding .form_show table tr th{
		width: 25%;
	}
	/*瞄点链接*/
	.profit_budget #profit_budget{
		position: absolute;
		top: -140px;
	}
</style>

<!--引入诚邀各行业精英加盟?人群分析？？-->
<div class="welcome_join">
	<a id="welcome_join" name="welcome_join"></a>
	<div class="zr_header">
		<h1>诚邀各行业精英加盟</h1>
		<p>WELCOME TO JOIN</p>
		<div class="bar_bottom"></div>
	</div>
	<div class="word_img">
		<div class="many_show">
			<ul>
				<li>
					<img src="__STATIC_PATH__/static/cityopration/images/elite1.jpg"/>
					<p>房产策划销售</p>
				</li>
				<li>
					<img src="__STATIC_PATH__/static/cityopration/images/elite2.jpg"/>
					<p>房产策划销售</p>
				</li>
				<li>
					<img src="__STATIC_PATH__/static/cityopration/images/elite3.jpg"/>
					<p>房产策划销售</p>
				</li>
				<li>
					<img src="__STATIC_PATH__/static/cityopration/images/elite4.jpg"/>
					<p>房产策划销售</p>
				</li>
				<li>
					<img src="__STATIC_PATH__/static/cityopration/images/elite5.jpg"/>
					<p>房产策划销售</p>
				</li>
				<li>
					<img src="__STATIC_PATH__/static/cityopration/images/elite6.jpg"/>
					<p>房产策划销售</p>
				</li>
				<li>
					<img src="__STATIC_PATH__/static/cityopration/images/elite7.jpg"/>
					<p>房产策划销售</p>
				</li>
				<li>
					<img src="__STATIC_PATH__/static/cityopration/images/elite8.jpg"/>
					<p>房产策划销售</p>
				</li>
				<li>
					<img src="__STATIC_PATH__/static/cityopration/images/elite9.jpg"/>
					<p>房产策划销售</p>
				</li>
				<li>
					<img src="__STATIC_PATH__/static/cityopration/images/elite10.jpg"/>
					<p>房产策划销售</p>
				</li>
				<li>
					<img src="__STATIC_PATH__/static/cityopration/images/elite9.jpg"/>
					<p>房产策划销售</p>
				</li>
				<li>
					<img src="__STATIC_PATH__/static/cityopration/images/elite10.jpg"/>
					<p>房产策划销售</p>
				</li>
				
			</ul>
		</div>
		<div class="img_right">
			<img src="__STATIC_PATH__/static/cityopration/images/elite-right.jpg"/>
		</div>
	</div>
</div>

<style type="text/css">
	/*头部*/
	.welcome_join{
		color: #3D3D3D;
		padding: 0px 15px;
		padding-bottom: 20px;
		position: relative;
		
	}
	.welcome_join .zr_header{
		padding: 60px 0px 40px 0px;
		text-align: center;
	}
	.welcome_join .zr_header h1{
		font-weight: 500;
		font-size: 36px
	}
	.welcome_join .zr_header p{
		font-size: 16px;
	}
	.welcome_join .zr_header .bar_bottom{
		width: 50px;
		height: 2px;
		background: #44b13f;
		margin:auto;
		margin-top: 15px;
		transition: all 0.6s;
	}
	.welcome_join .zr_header:hover .bar_bottom{
		width: 80px;
	}
	/*展示内容*/
	.welcome_join .word_img{
		overflow: hidden;
	}
	.welcome_join .word_img .many_show{
		float: left;
		margin-right: 100px;
	}
	.welcome_join .word_img .many_show ul{
		overflow: hidden;
		width: 570px;
		font-size: 20px;
	}
	.welcome_join .word_img .many_show ul li{
		float: left;
		list-style: none;
		overflow: hidden;
		margin-right: 85px;
		margin-bottom: 25px;
		height: 45px;
	}
	.welcome_join .word_img .many_show ul li:nth-child(2n){
		margin-right: 0;
	}
	.welcome_join .word_img .many_show ul li img{
		float: left;
	}
	.welcome_join .word_img .many_show ul li p{
		float: left;
		line-height: 45px;
		margin-left: 30px;
	}
	.welcome_join .word_img .img_right{
		float: left;
	}
	/*瞄点链接*/
	.welcome_join #welcome_join{
		position: absolute;
		top: -140px;
	}
</style>

<!--引入合作优势-->
<div class="cooperation_relation">
	<a id="cooperation_relation" name="cooperation_relation"></a>
	<div class="zr_header">
		<h1>合作级别与关系</h1>
		<p>COLLABORATION LEVELS AND RALATIONSHIPS</p>
		<div class="bar_bottom"></div>
	</div>
	<div class="container">
		<div class="h1_img">
			<h1>乐住中国</h1>
			<div class="img_show">
				<img src="__STATIC_PATH__/static/cityopration/images/arrow1.png"/>
			</div>
		</div>
		<div class="h1_img">
			<h1>城市运营商</h1>
			<div class="img_show">
				<img src="__STATIC_PATH__/static/cityopration/images/arrow3.png"/>
				<img src="__STATIC_PATH__/static/cityopration/images/arrow1.png"/>
				<img src="__STATIC_PATH__/static/cityopration/images/arrow2.png"/>
			</div>
		</div>
		<div class="many_h1_h2_p">
			<div class="h1_h2_p">
				<h1>A类城市</h1>
				<h2>城市运营商</h2>
				<div class="many_p">
					<p>1级城市经销商</p>
					<p>2级城市经销商</p>
					<p>3级城市经销商</p>
				</div>
			</div>
			<div class="h1_h2_p">
				<h1>B类城市</h1>
				<h2>城市运营商</h2>
				<div class="many_p">
					<p>1级城市经销商</p>
					<p>2级城市经销商</p>
					<p>3级城市经销商</p>
				</div>
			</div>
			<div class="h1_h2_p">
				<h1>C类城市</h1>
				<h2>城市运营商</h2>
				<div class="many_p">
					<p>1级城市经销商</p>
					<p>2级城市经销商</p>
					<p>3级城市经销商</p>
				</div>
			</div>
		</div>
		
	</div>
</div>

<style type="text/css">
	/*头部*/
	.cooperation_relation{
		background: url('__STATIC_PATH__/static/cityopration/images/brand-bg2.jpg') center no-repeat;
		width: 100%;
		height: 680px;
		color: white;
		position: relative;
	}
	.cooperation_relation .zr_header{
		padding: 60px 0px 40px 0px;
		text-align: center;
	}
	.cooperation_relation .zr_header h1{
		font-weight: 500;
		font-size: 36px
	}
	.cooperation_relation .zr_header p{
		font-size: 16px;
	}
	.cooperation_relation .zr_header .bar_bottom{
		width: 50px;
		height: 2px;
		background: #44b13f;
		margin:auto;
		margin-top: 15px;
		transition: all 0.6s;
	}
	.cooperation_relation .zr_header:hover .bar_bottom{
		width: 80px;
	}
	/*容器*/
	.cooperation_relation .container .h1_img{
		width: 100%;
		text-align: center;
	}
	.cooperation_relation .container h1{
		font-size: 24px;
		font-weight: bold;
	}
	.cooperation_relation .container .h1_img .img_show{
		margin: 20px 0px;
	}
	.cooperation_relation .container .h1_img .img_show img:nth-child(2){
		margin: 0px 80px;
	}
	.cooperation_relation .many_h1_h2_p{
		overflow: hidden;
		margin-left: calc(50% - 300px);
	}
	.cooperation_relation .many_h1_h2_p .h1_h2_p{
		float: left;
		width: 200px;
		text-align: center;
	}
	.cooperation_relation .many_h1_h2_p .h1_h2_p h1{
		margin-bottom: 30px;
	}
	.cooperation_relation .many_h1_h2_p .h1_h2_p h2{
		font-weight: 100;
		font-size: 24px;
		margin-bottom: 20px;
	}
	.cooperation_relation .many_h1_h2_p .h1_h2_p p{
		font-size: 16px;
		margin-bottom: 15px;		
	}
	/*瞄点链接*/
	.cooperation_relation #cooperation_relation{
		position: absolute;
		top: -140px;
	}
</style>

<!--引入加盟优势-->
<div class="cooperation_advantage">
	<a id="cooperation_advantage" name="cooperation_advantage"></a>
	<div class="zr_header">
		<h1>加盟优势</h1>
		<p>FRANCHISE ADVANTAGE</p>
		<div class="bar_bottom"></div>
	</div>
	<div class="container">
		<ul>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/join1.png"/>
				<h1>0加盟代理费</h1>
				<div class="many_p">
					<p>实力品牌0加盟费</p>
					<p>投入低风险小</p>
					<p>操作简单收益快</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/join2.png"/>
				<h1>0品牌使用费</h1>
				<div class="many_p">
					<p>标杆品牌0使用费</p>
					<p>加盟无后顾之忧</p>
					<p>品牌业务经验丰富</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/join3.png"/>
				<h1>0产品升级费</h1>
				<div class="many_p">
					<p>产品升级免费</p>
					<p>专业研发团队</p>
					<p>系统免费维护</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/join4.png"/>
				<h1>多种合作方式</h1>
				<div class="many_p">
					<p>运营商，一、二、三级经销商</p>
					<p>依自身条件灵活选择</p>
					<p>多重合作方案</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/join5.png"/>
				<h1>全程运营辅导</h1>
				<div class="many_p">
					<p>开业指导</p>
					<p>运营指导</p>
					<p>市场指导</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/join6.png"/>
				<h1>丰厚利润空间</h1>
				<div class="many_p">
					<p>收益持续性</p>
					<p>收益多样性</p>
					<p>收益广泛性</p>
				</div>
			</li>
		</ul>
	</div>
</div>

<style type="text/css">
	/*头部*/
	.cooperation_advantage{
		color: #3D3D3D;
		padding: 0px 15px;
		padding-bottom: 20px;
		position: relative;
		margin-bottom: 120px;
	}
	.cooperation_advantage .zr_header{
		padding: 60px 0px 40px 0px;
		text-align: center;
	}
	.cooperation_advantage .zr_header h1{
		font-weight: 500;
		font-size: 36px
	}
	.cooperation_advantage .zr_header .bar_bottom{
		width: 50px;
		height: 2px;
		background: #44b13f;
		margin:auto;
		margin-top: 15px;
		transition: all 0.6s;
	}
	.cooperation_advantage .zr_header:hover .bar_bottom{
		width: 80px;
	}
	/*容器*/
	.cooperation_advantage .container{}
	.cooperation_advantage .container ul{
		overflow: hidden;
		width: 100%;
	}
	.cooperation_advantage .container ul li{
		padding: 45px 0px;
		float: left;
		width: 33.3%;
		height: 280px;
		list-style: none;
		text-align: center;
		background: #49d075;
		color: white;
		box-sizing: border-box;
		cursor: pointer;
	}
	.cooperation_advantage .container ul li:hover{}
	.cooperation_advantage .container ul li:hover img{
		transition: all 0.6s;
		transform: scale(1.15);
	}
	.cooperation_advantage .container ul li:hover h1{
		transition: all 0.6s;
		transform: scale(1.15);
	}
	.cooperation_advantage .container ul li:hover .many_p p{
		transition: all 0.6s;
		transform: scale(1.15);
	}
	.cooperation_advantage .container ul li:nth-child(2n){
		background: #f4f4f4;
		color: #333333;
		
	}
	.cooperation_advantage .container ul li h1{
		padding: 20px 0px;
		font-weight: 200;
		font-size: 30px;
	}
	.cooperation_advantage .container ul li .many_p p{
		font-size: 14px;
		line-height: 20px;
	}
	/*瞄点链接*/
	.cooperation_advantage #cooperation_advantage{
		position: absolute;
		top: -140px;
	}
</style>

<!--引入加盟流程-->
<div class="cooperation_process">
	<a id="cooperation_process" name="cooperation_process"></a>
	<div class="zr_header">
		<h1>加盟流程</h1>
		<p>FRANCHISE PROCESS</p>
		<div class="bar_bottom"></div>
	</div>
	<div class="container">
		<ul>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/process1.jpg"/>
				<h2>01电话沟通</h2>
				<div class="many_p">
					<p>商务洽谈</p>
					<p>总部考察</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/process2.jpg"/>
				<h2>02实地考察</h2>
				<div class="many_p">
					<p>全国招商热线：</p>
					<p>400-8090-590</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/process3.jpg"/>
				<h2>03签约授权</h2>
				<div class="many_p">
					<p>合作级别</p>
					<p>考核指标</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/process4.jpg"/>
				<h2>04开业运作</h2>
				<div class="many_p">
					<p>开业方案</p>
					<p>培训支持</p>
				</div>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/cityopration/images/process5.jpg"/>
				<h2>05后期运营</h2>
				<div class="many_p">
					<p>后期指导</p>
					<p>营销支持</p>
				</div>
			</li>
		</ul>
	</div>
</div>

<style type="text/css">
	/*头部*/
	.cooperation_process{
		color: #3D3D3D;
		padding: 0px 15px;
		padding-bottom: 70px;
		background: #f4f4f4;
		position: relative;
	}
	.cooperation_process .zr_header{
		padding: 60px 0px 40px 0px;
		text-align: center;
	}
	.cooperation_process .zr_header h1{
		font-weight: 500;
		font-size: 36px
	}
	.cooperation_process .zr_header .bar_bottom{
		width: 50px;
		height: 2px;
		background: #44b13f;
		margin:auto;
		margin-top: 15px;
		transition: all 0.6s;
	}
	.cooperation_process .zr_header:hover .bar_bottom{
		width: 80px;
	}
	/*容器*/
	.cooperation_process .container{
		padding: 0px 15px;
	}
	.cooperation_process .container ul{
		overflow: hidden;
		width: 100%;
	}
	.cooperation_process .container ul li{
		float: left;
		width: 20%;
		text-align: center;
		list-style: none;
	}
	.cooperation_process .container ul li h2{
		font-size: 30px;
		font-weight: bold;
		margin-top: 20px;
	}
	.cooperation_process .container ul li .many_p{
		margin-top: 30px;
	}
	.cooperation_process .container ul li .many_p p{
		line-height: 25px;
	}
	/*瞄点链接*/
	.cooperation_process #cooperation_process{
		position: absolute;
		top: -140px;
	}
</style>

<!--引入滑动改变导航条高亮-->
<div class="change_bar">
	<p>滑动改变导航条高亮</p>
</div>

<script type="text/javascript">
	var barH1=$('.trademark_concept').offset().top;
	var barH2=$('.market_prospect').offset().top;
	var barH3=$('.why_select').offset().top;
	var barH4=$('.lezhu_product').offset().top;
	var barH5=$('.tv_report').offset().top;
	var barH6=$('.profit_budget').offset().top;
	var barH7=$('.welcome_join').offset().top;
	var barH8=$('.cooperation_relation').offset().top;
	var barH9=$('.cooperation_advantage').offset().top;
	var barH10=$('.cooperation_process').offset().top;
	console.log($('.fixed_navbar ul li').eq(0).find('a'))
	console.log($('.fixed_navbar ul li').eq(0).siblings().find('a'))
//	$('.fixed_navbar ul li').eq(0).find('a').css({'background':'#f0f9f1','color':'#333'})
	$(window).scroll(function(){
		var H=$(document).scrollTop();
//		console.log(H)
//		console.log(barH2)
		if(H<barH2-200){
			$('.fixed_navbar ul li').find('a').css({'background':'#49d075','color':'#fff'})
			$('.fixed_navbar ul li').eq(0).find('a').css({'background':'#f0f9f1','color':'#333'})
		}
		else if(H<barH3-200&&H>=barH2-200){
			$('.fixed_navbar ul li').find('a').css({'background':'#49d075','color':'#fff'})
			$('.fixed_navbar ul li').eq(1).find('a').css({'background':'#f0f9f1','color':'#333'})
		}
		else if(H<barH4-200&&H>=barH3-200){
			$('.fixed_navbar ul li').find('a').css({'background':'#49d075','color':'#fff'})
			$('.fixed_navbar ul li').eq(2).find('a').css({'background':'#f0f9f1','color':'#333'})
		}
		else if(H<barH5-200&&H>=barH4-200){
			$('.fixed_navbar ul li').find('a').css({'background':'#49d075','color':'#fff'})
			$('.fixed_navbar ul li').eq(3).find('a').css({'background':'#f0f9f1','color':'#333'})
		}
		else if(H<barH6-200&&H>=barH5-200){
			$('.fixed_navbar ul li').find('a').css({'background':'#49d075','color':'#fff'})
			$('.fixed_navbar ul li').eq(4).find('a').css({'background':'#f0f9f1','color':'#333'})
		}
		else if(H<barH7-200&&H>=barH6-200){
			$('.fixed_navbar ul li').find('a').css({'background':'#49d075','color':'#fff'})
			$('.fixed_navbar ul li').eq(5).find('a').css({'background':'#f0f9f1','color':'#333'})
		}
		else if(H<barH8-200&&H>=barH7-200){
			$('.fixed_navbar ul li').find('a').css({'background':'#49d075','color':'#fff'})
			$('.fixed_navbar ul li').eq(6).find('a').css({'background':'#f0f9f1','color':'#333'})
		}
		else if(H<barH9-200&&H>=barH8-200){
			$('.fixed_navbar ul li').find('a').css({'background':'#49d075','color':'#fff'})
			$('.fixed_navbar ul li').eq(7).find('a').css({'background':'#f0f9f1','color':'#333'})
		}
		else if(H<barH10-200&&H>=barH9-200){
			$('.fixed_navbar ul li').find('a').css({'background':'#49d075','color':'#fff'})
			$('.fixed_navbar ul li').eq(8).find('a').css({'background':'#f0f9f1','color':'#333'})
		}
		else if(H>=barH10-200){
			$('.fixed_navbar ul li').find('a').css({'background':'#49d075','color':'#fff'})
			$('.fixed_navbar ul li').eq(9).find('a').css({'background':'#f0f9f1','color':'#333'})
		}
	})
</script>

<!--引入公共导航尾部-->

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

<!--引入公共尾部-->

	</body>
</html>
