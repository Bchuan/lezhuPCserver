<?php if (!defined('THINK_PATH')) exit(); /*a:11:{s:88:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\companyintro\index.html";i:1508311417;s:83:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\common\header.html";i:1508310960;s:81:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\public\head.html";i:1508310960;s:104:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\companyintro\header_img\header_img.html";i:1508310960;s:104:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\companyintro\know_lezhu\know_lezhu.html";i:1508310960;s:110:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\companyintro\know_lezhupic\know_lezhupic.html";i:1508310960;s:112:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\companyintro\company_course\company_course.html";i:1508316362;s:118:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\companyintro\company_coursepic\company_coursepic.html";i:1508310960;s:122:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\companyintro\software_show_lunbo\software_show_lunbo.html";i:1508310960;s:81:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\public\foot.html";i:1508310960;s:83:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\common\footer.html";i:1508310960;}*/ ?>
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
	
</div>
<style type="text/css">
	.header_img{
		background: url('__STATIC_PATH__/static/companyintro/images/banner.jpg') center no-repeat;
		width: 100%;
		height: 400px;
		margin-top: 80px;
	}
</style>

<!--引入认识乐住模块-->
<div class="know_lezhu">
	<h1>认识乐住</h1>
	<div class="many_p">
		<p>乐住网络服务有限公司前身是长沙卓远文化传播有限公司，成立于2009年1月，8年社区资源服务经验，服务全国80多个城市的1496个小区近200万名业主。央视13台《面对面》、央<br>视7台《致富经》栏目都有专题报道公司创业历程。</p>
		<p>2014年公司开启乐住智慧小区项目，创新性地自主研发了全国首个PC端与APP端同步的网上物业服务平台。乐住APP是在“互联网+”建设思路指引下，为居民提供集合网上物业、<br>公共服务、生活服务等多种功能，并可持续扩容的服务终端，成为小区生态链的“连接器”。</p>
		<p>基于与物业的广泛合作基础，公司迅速和长沙市500多个小区、社区确认合作；与小区智能化第三方机构全国性供应商如汽车新能源企业特来电、自助写卡机企业方迪科技等签订合<br>作；同时作为中国银联湖南唯一战略合作伙伴，在全国已开展长春、昆明、岳阳等10多个城市合作运营试点，将逐步启动圈定的158个城市合作运营。</p>
		<p>公司成为长沙市住建委“智慧小区建设标准”唯一起草单位，并荣获2015中国软件大会“智慧小区领域标杆企业”奖。2016年6月，公司及创始人曹志远先后被人民网、国家住建部<br>主办《中国建设报》等重要媒体作深度报道。2017年5月，三一街区智慧小区被湖南卫视、芒果TV、红网、三湘都市报、今日女报、大公报等10余家主流媒体深度报道。</p>
	</div>
</div>

<style type="text/css">
	.know_lezhu{
		margin-top: 75px;
		padding: 0px 20px;
	}
	.know_lezhu h1{
		padding-left: 20px;
		border-left: 6px solid #49d074;
		font-size: 30px;
		height: 33px;
		line-height: 33px;
		margin-bottom: 45px;
	}
	.know_lezhu .many_p{
		color: #777;
		font-size: 16px;
	}
	.know_lezhu .many_p p{
		margin-bottom: 50px;
		line-height: 22px;
	}
</style>


<!--引入认识乐住pic模块-->
<div class="know_lezhupic">
	<img src="__STATIC_PATH__/static/companyintro/images/lz-img.jpg"/>
</div>

<style type="text/css">
	.know_lezhupic{
		padding: 0px 20px;
	}
	.know_lezhupic img{
		width: 100%;
		margin-top: 50px;
	}
</style>

<!--引入认识公司历程模块-->
<div class="company_course">
	<h1>公司历程</h1>
	<ul>
		<!--做后台时左右2个属性的li，用if去判断$key循环出来-->
		<li>
			<div class="img_left">
				<img src="__STATIC_PATH__/static/companyintro/images/2008.png"/>
			</div>
			<div class="img_right">
				<div class="h4_p">
					<h4>2008</h4>
					<p>第一本《业主手册》(香樟雅郡)问世，首创中国“新楼盘终端媒体”模式。</p>
				</div>
			</div>
		</li>
		<li>
			<div class="img_right">
				<div class="h4_p">
					<h4>2009</h4>
					<p>1月13日，注册成立长沙卓远文化传播有限公司。与同升湖、保利阆峰、碧桂园威尼斯城等物业成功合作。</p>
				</div>
			</div>
			<div class="img_left">
				<img src="__STATIC_PATH__/static/companyintro/images/2009.png"/>
			</div>
		</li>
		<!--做后台时左右2个属性的li，用if去判断$key循环出来-->
		<li>
			<div class="img_left">
				<img src="__STATIC_PATH__/static/companyintro/images/2010.png"/>
			</div>
			<div class="img_right">
				<div class="h4_p">
					<h4>2010</h4>
					<p>获长沙市雨花区创业资金扶持，在长沙与绿城、保利、碧桂园、长城等大型物业合作，服务本土上百家一二线、家居建材商户品牌。</p>
				</div>
			</div>
		</li>
		<li>
			<div class="img_right">
				<div class="h4_p">
					<h4>2011</h4>
					<p>签下第一家城市代理商——合肥，开始了布局全国传媒蓝图的征程。</p>
				</div>
			</div>
			<div class="img_left">
				<img src="__STATIC_PATH__/static/companyintro/images/2011.png"/>
			</div>
		</li>
		<!--做后台时左右2个属性的li，用if去判断$key循环出来-->
		<li>
			<div class="img_left">
				<img src="__STATIC_PATH__/static/companyintro/images/2012.png"/>
			</div>
			<div class="img_right">
				<div class="h4_p">
					<h4>2012</h4>
					<p>全国代理城市达60家，卓远品牌在全国市场的知名度、美誉度同步提升。曹志远先生获“中国创业明星”、长沙市“创业新星”和“金牌创业导师”等荣誉，被各主流媒体广泛报道。</p>
				</div>
			</div>
		</li>
		<li>
			<div class="img_right">
				<div class="h4_p">
					<h4>2013</h4>
					<p>自购华雅国际大酒店一号公馆12层独立办公室,跨入现代化、品牌化、标准化企业发展新里程。曹志远接收央视CCTV13新闻频道《面对面》和CCTV7军事农业频道《致富经》等栏目专访,被誉为“85后创业年轻人典范”。</p>
				</div>
			</div>
			<div class="img_left">
				<img src="__STATIC_PATH__/static/companyintro/images/2013.png"/>
			</div>
		</li>
		<!--做后台时左右2个属性的li，用if去判断$key循环出来-->
		<li>
			<div class="img_left">
				<img src="__STATIC_PATH__/static/companyintro/images/2014.png"/>
			</div>
			<div class="img_right">
				<div class="h4_p">
					<h4>2014</h4>
					<p>启动乐住智慧小区项目，自主研发的智慧物业平台投入使用，“乐住”App第一版上线。12月，与长沙市民政局、雨花区人民政府联合举办了乐住智慧社区项目试点新闻发布会。</p>
				</div>
			</div>
		</li>
		<li>
			<div class="img_right">
				<div class="h4_p">
					<h4>2015</h4>
					<p>2月，公司与中国银联（湖南分公司）签署战略合作。8月，公司正式更名为“乐住网络服务有限公司”，与500多个小区合作开展智慧小区建设。11月，启动全国城市运营合作计划，长春、岳阳等城市已开展运营。12月16日，在长沙人民会堂举办，央视名嘴董倩主持的“互联网+小区”项目启动仪式暨新闻发布会。</p>
				</div>
			</div>
			<div class="img_left">
				<img src="__STATIC_PATH__/static/companyintro/images/2015.png"/>
			</div>
		</li>
		<!--做后台时左右2个属性的li，用if去判断$key循环出来-->
		<li>
			<div class="img_left">
				<img src="__STATIC_PATH__/static/companyintro/images/2016.png"/>
			</div>
			<div class="img_right">
				<div class="h4_p">
					<h4>2016</h4>
					<p>3月，打造长沙四大样板小区，成为全国城市运营的示范标杆实例。6月，乐住网络创始人曹志远受到人民网专题报道。7月，乐住智慧小区获得国家住建委《中国建设报》深度报道与推介。</p>
				</div>
			</div>
		</li>
		<li>
			<div class="img_right">
				<div class="h4_p">
					<h4>2017</h4>
					<p>5月 ，乐住智慧小区被湖南卫视、芒果TV等10余家主流媒体报道与推介。</p>
				</div>
			</div>
			<div class="img_left">
				<img src="__STATIC_PATH__/static/companyintro/images/2017.png"/>
			</div>
		</li>
	</ul>
</div>

<style type="text/css">
	.company_course{
		margin-top: 75px;
		padding: 70px 20px 20px 20px;
		background: #f4f4f4;
		
	}
	.company_course h1{
		padding-left: 20px;
		border-left: 6px solid #49d074;
		font-size: 30px;
		height: 33px;
		line-height: 33px;
		margin-bottom: 45px;
	}
	.company_course ul li{
		list-style: none;
		overflow: hidden;
		margin-bottom: 65px;
	}
	.company_course ul li .img_left{
		float: left;
		width: 21%;
	}
	.company_course ul li .img_left img{
		width: 230px;
    	margin-left: 20px;
	}
	.company_course ul li .img_right{
		background: url('__STATIC_PATH__/static/companyintro/images/left.png') no-repeat;
		height: 196px;
		float: left;
		width: 79%;
	}
	.company_course ul li:nth-child(2n) .img_right{
		background: url('__STATIC_PATH__/static/companyintro/images/right.png') no-repeat;
	}
	.company_course ul li .img_right .h4_p{
		padding: 54px 110px 55px 65px;
	}
	.company_course ul li .img_right .h4_p h4{
		color: #49d075;
		font-size: 20px
	}
	.company_course ul li .img_right .h4_p p{
		margin-top: 25px;
		color: #777;
		font-size: 16px;
	}
	.company_course ul li .img_right:hover  .h4_p p{
		color: #49d075;
	}
</style>

<!--引入认识公司历程pic模块-->
<div class="company_coursepic">
	<img src="__STATIC_PATH__/static/companyintro/images/honor.png" />
</div>
<style type="text/css">
	.company_coursepic{
		margin-top: 105px;
	}
	.company_coursepic img{
		width: 100%;
	}
</style>

<!--引入软件展示轮播模块-->
<div class="software_show_lunbo">
	<h1>软件著作权</h1>
	<div class="ul_move">
		<ul>
			<li>
				<img src="__STATIC_PATH__/static/companyintro/images/copyright1.jpg"/>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/companyintro/images/copyright2.jpg"/>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/companyintro/images/copyright3.jpg"/>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/companyintro/images/copyright4.jpg"/>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/companyintro/images/copyright5.jpg"/>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/companyintro/images/copyright6.jpg"/>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/companyintro/images/copyright1.jpg"/>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/companyintro/images/copyright2.jpg"/>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/companyintro/images/copyright3.jpg"/>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/companyintro/images/copyright4.jpg"/>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/companyintro/images/copyright5.jpg"/>
			</li>
			<li>
				<img src="__STATIC_PATH__/static/companyintro/images/copyright6.jpg"/>
			</li>
		</ul>
	</div>
	
</div>

<style type="text/css">
	.software_show_lunbo{
		margin-top: 75px;
		padding: 70px 20px 20px 20px;
		
	}
	.software_show_lunbo h1{
		padding-left: 20px;
		border-left: 6px solid #49d074;
		font-size: 30px;
		height: 33px;
		line-height: 33px;
		margin-bottom: 45px;
	}
	.software_show_lunbo .ul_move{
		position: relative;
		height: 430px;
		overflow: hidden;
	}
	.software_show_lunbo .ul_move:hover ul{
		animation-play-state: paused;
	}
	.software_show_lunbo .ul_move ul{
		overflow: hidden;
		position: absolute;
		left: 0px;
		width: 300%;
		animation: move_ul_left 10s infinite linear;
	}
	.software_show_lunbo .ul_move ul li{
		list-style: none;
		float: left;
		width: 320px;
	}
	.software_show_lunbo .ul_move ul li img{
		margin-right: 20px;
		width: calc(100% - 20px);
	}
	@keyframes move_ul_left{
		from{left: 0px;}
		to{left: -1920px;}
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

