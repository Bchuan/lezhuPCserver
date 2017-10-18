<?php if (!defined('THINK_PATH')) exit(); /*a:10:{s:125:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\productintro\index.html";i:1508298570;s:120:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\common\header.html";i:1508295703;s:118:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\public\head.html";i:1508299354;s:141:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\productintro\header_img\header_img.html";i:1508295563;s:139:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\productintro\vue_store\vue_store.html";i:1508295563;s:147:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\productintro\vue_store_img\vue_store_img.html";i:1508295563;s:145:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\productintro\vue_internet\vue_internet.html";i:1508298519;s:153:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\productintro\vue_internet_img\vue_internet_img.html";i:1508295563;s:118:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\public\foot.html";i:1508299701;s:120:"E:\Tools\wampserver3.0.6\program\wamp64\www\lezhu_pc\2\lezhuPCserver\public/../application/index\view\common\footer.html";i:1508295703;}*/ ?>
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
		background: url('__STATIC_PATH__/static/productintro/images/banner.jpg') center no-repeat;
		width: 100%;
		height: 400px;
		margin-top: 80px;
	}
</style>

<!--智慧小区体验馆，为服务助力vue_store部分-->
<div id="vue_store">
	<div class="vue_store">
		<h1>智慧小区体验馆，为服务助力</h1>
		<ul>
			<li><router-link to="/signo" active-class='cur_menu'>智能道闸</router-link></li>
			<li><router-link to="/access" active-class='cur_menu'>安全门禁</router-link></li>
			<li><router-link to="/vem" active-class='cur_menu'>自助售货机</router-link></li>
			<li><router-link to="/chargingpile" active-class='cur_menu'>汽车充电桩</router-link></li>
			<li><router-link to="/washcar" active-class='cur_menu'>自助洗车</router-link></li>
			<li><router-link to="/delivery" active-class='cur_menu'>自助快递柜</router-link></li>
			<li><router-link to="/payservice" active-class='cur_menu'>自助缴费终端</router-link></li>
		</ul>
		<div>
			<router-view></router-view>
		</div>
	</div>	
</div>

<template id='signoHtml'>
	<div class="signoHtml">
		<div class="h3_p">
			<h3>智能识别功能</h3>
			<p>自动识别车辆的车牌号码，并录入车辆管理系统</p>
		</div>
		<div class="h3_p">
			<h3>费用计算功能</h3>
			<p>自动识别车辆的车牌号码，并录入车辆管理系统</p>
			<p>临时停车交费（根据物业规则设定）</p>
			<p>临时停车有六种支付方式：乐住支付、现金支付、银联闪付、iPay支付 、微信支付、支付宝支付；</p>
			<p>费用到期提醒功能（月卡用户）</p>
		</div>
		<div class="h3_p">
			<h3>车辆进出记录</h3>
			<p>对车辆的出入时间进行记录</p>
		</div>
		<div class="h3_p">
			<h3>智能识别功能</h3>
			<p>APP显示空闲车位并导航 (增配地磁感应设备，建议用于商业停车场）</p>
		</div>
		<div class="img_phone">
			<img src="__STATIC_PATH__/static/productintro/images/zhxq1.png"/>
		</div>
	</div>
</template>

<template id="accessHtml">
	<div class="accessHtml">
		<div class="h3_p">
			<h3>业主开关门</h3>
			<p>门禁卡开门；</p>
			<p>门禁密码开门；</p>
			<p>手机”摇一摇”开门，手机“点击”开门（厂家已实现，通过蓝牙开门需对厂家说明.</p>
			<p>厂家才会装上蓝牙模块,实现APP开门功能）；</p>
			<p>WIFI连接开门（需要门禁厂家设备有WIFI功能才能实现）</p>
		</div>
		<div class="h3_p">
			<h3>访客开门</h3>
			<p>访客输入密码钥匙(数字密码)开门。(需厂家系统支持业主端生成临时开门密码，开门后即时失效）</p>
			<p>二维码扫码开门（需要门禁厂家在读卡器上安装二维码扫描器才能实现二维码开门，业主授权给访客，访客凭二维码扫描进入）</p>
		</div>
		<div class="h3_p">
			<h3>门禁记录</h3>
			<p>包含业主开关门、访客开关门及业主授权记录</p>
		</div>
		<div class="img_phone">
			<img src="__STATIC_PATH__/static/productintro/images/zhxq2.png"/>
		</div>
	</div>
</template>

<template id="vemHtml">
	<div class="vemHtml">
		<div class="many_p">
			<p>充分运用云计算、物联网等新一代信息技术，将传统纸质货币进行自助售货机的购物，转向成线下购物，线上支付，通过手机APP进行扫码支付购物费用，进行线下自助售货机的购物交易。</p>
			<p>1、支持市面主流支付方式例：乐住支付、银联支付、银联闪付、微信、支付宝、现金、一卡通等；</p>
			<p>2、支持线上线下各种营销活动；</p>
			<p>3、自助售货机商品种类、数量、价格查询；</p>
			<p>4、自助售货机位置查询。</p>
		</div>	
		<div class="img_phone">
			<img src="__STATIC_PATH__/static/productintro/images/zhxq3.png"/>
		</div>
	</div>
</template>

<template id="chargingpileHtml">
	<div class="chargingpileHtml">
		<div class="many_p">
			<p>1.GPS定位功能：APP查看小区内的充电桩设备的位置</p>
			<p>2.设备使用状态查看功能</p>
			<p>3.费用计算功能：APP自动计算出本次充电费用</p>
			<p>4.支付功能：乐住支付、微信、支付宝、银联支付</p>
			<p>5.APP提醒功能：通过APP设置单次充电时间，充电结束自动提醒</p>
		</div>	
		<div class="img_phone">
			<img src="__STATIC_PATH__/static/productintro/images/zhxq4.png"/>
		</div>
	</div>
</template>

<template id="washcarHtml">
	<div class="washcarHtml">
		<div class="many_p">
			<p>1.GPS定位功能：APP查看小区内自助洗车设备位置</p>
			<p>2.设备使用状态查看功能</p>
			<p>3.费用计算功能：APP自动计算出本次充电费用</p>
			<p>4.支付功能：乐住支付、微信、支付宝、银联支付</p>
		</div>	
		<div class="img_phone">
			<img src="__STATIC_PATH__/static/productintro/images/zhxq5.png"/>
		</div>
	</div>
</template>

<template id="deliveryHtml">
	<div class="deliveryHtml">
		<div class="many_p">
			<p>1.有件到时乐住提醒有快件到达</p>
			<p>2.通过乐住快件取键码打开自助收件柜</p>
			<p>3.定位功能，安装快递柜的地方可通过GPS定位</p>
			<p>4.还可自助邮寄快递，方便快捷，物业可赚取服务费</p>
			<p>5.电子显示屏增设广告位，可提升物业营收</p>
		</div>	
		<div class="img_phone">
			<img src="__STATIC_PATH__/static/productintro/images/zhxq6.png"/>
		</div>
	</div>
</template>

<template id="payserviceHtml">
	<div class="payserviceHtml">
		<div class="many_p">
			<p>1.银联便民支付，拥有银联支付的安全保障；</p>
			<p>2.支持便民缴费等多种功能： 公共事业缴费如水费、电费、燃气费等；本省话费缴费、全国手机直充；银行卡查余等常用便民功能；信用卡还款等；</p>
			<p>3.其他待开通功能：根据政务开放实际情况等，如办理民政类事务、社会保险等电子政务办理。</p>
		</div>	
		<div class="img_phone">
			<img src="__STATIC_PATH__/static/productintro/images/zhxq7.png"/>
		</div>
	</div>
</template>
<script type="text/javascript">
	const router=new VueRouter({
		routes:[
			{
				//重定向
				path:'/',
				redirect:'/signo'
			},
			{
				path:'/signo',
				component:{
					template:'#signoHtml'
				}
			},
			{
				path:'/access',
				component:{
					template:'#accessHtml'
				}
			},
			{
				path:'/vem',
				component:{
					template:'#vemHtml'
				}
			},
			{
				path:'/chargingpile',
				component:{
					template:'#chargingpileHtml'
				}
			},
			{
				path:'/washcar',
				component:{
					template:'#washcarHtml'
				}
			},
			{
				path:'/delivery',
				component:{
					template:'#deliveryHtml'
				}
			},
			{
				path:'/payservice',
				component:{
					template:'#payserviceHtml'
				}
			}
		]
	});
	new Vue({
		el:"#vue_store",
		data:[],
		methods:{},
		router
	});
</script>

<!--头部style-->
<style type="text/css">
	.vue_store{
		margin: 0px;
		padding: 0px 15px;
		list-style: none;
		margin-top: 95px;
	}
	.vue_store h1{
		font-size: 30px;
		text-align: center;
		color: #333;
	}
	.vue_store ul{
		overflow: hidden;
		margin-top: 65px;
	}
	.vue_store ul li{
		width: 165px;
		height: 40px;
		background: #ededed;
		text-align: center;
		float: left;
		list-style: none;
		line-height: 40px;
		font-size: 18px;
		margin-right: 20px;
	}
	.vue_store ul li .cur_menu{
		background: #49d075;
		color: #FFFFFF;
	}
	.vue_store ul li a{
		text-decoration: none;
		color: #333333;
		width: 165px;
		height: 40px;
		display: block;
	}
	.vue_store ul li:hover{
		background: #49d075;		
	}
	.vue_store ul li:hover  a{
		color: #ffffff;
	}
</style>
<!--signoHtml部分style-->
<style type="text/css">
	.signoHtml,.accessHtml,.vemHtml,.chargingpileHtml,.washcarHtml,.deliveryHtml,.payserviceHtml{
		padding-top: 45px;
		position: relative;
		animation: click_show 0.5s;
		-moz-animation: click_show 0.5s;
		-webkit-animation: click_show 0.5s;
		-moz-animation: click_show 0.5s;
	}
	.signoHtml .h3_p,.accessHtml .h3_p{
		margin-top: 35px;
		width: 600px;
	}
	.signoHtml h3,.accessHtml h3{
		font-size: 20px;
		color: #3d3d3d;
		font-weight: normal;
	}
	.signoHtml p,.accessHtml p{
		font-size: 16px;
		line-height: 32px;
		color: #777;
	}
	.signoHtml .img_phone,.accessHtml .img_phone,.vemHtml .img_phone,.chargingpileHtml .img_phone,.washcarHtml .img_phone,.deliveryHtml .img_phone,.payserviceHtml .img_phone{
		position: absolute;
		top: 200px;
		right: -10px;
	}
	/*进场/点击时的动画，兼容其他浏览器*/
	@keyframes click_show{
		from{top:-60px;}
		to{top:0px;}
	}
	@-moz-keyframes click_show{
		from{top:-60px;}
		to{top:0px;}
	}
	@-webkit-keyframes click_show{
		from{top:-60px;}
		to{top:0px;}
	}
	@-ms-keyframes click_show{
		from{top:-60px;}
		to{top:0px;}
	}
</style>
<!--accessHtml部分style-->
<style type="text/css">
	/*写在signoHtml中*/
</style>
<!--vemHtml部分style-->
<style type="text/css">
/*部分图片的代码和进场动画的代码在signoHtml中*/
	.vemHtml,.chargingpileHtml{
		padding-top: 200px;
	}
	.vemHtml .many_p,.chargingpileHtml .many_p,.washcarHtml .many_p,.deliveryHtml .many_p,.payserviceHtml .many_p{
		width: 600px;
	}
	.vemHtml .many_p p,.chargingpileHtml .many_p p,.washcarHtml .many_p p,.deliveryHtml .many_p p,.payserviceHtml .many_p p{
		font-size: 16px;
		padding: 10px 0px;
		color: #3d3d3d;
	}
	.chargingpileHtml,.washcarHtml,.deliveryHtml,.payserviceHtml{
		padding-top: 250px;
	}
</style>
<!--chargingpile部分，写在signoHtml和venHtml-->


<!--智慧小区体验馆，为服务助力vue_store_img部分-->
<div class="vue_store_img">
	<div class="img_left">
		<img src="__STATIC_PATH__/static/productintro/images/yf.png"/>
	</div>
	<div class="word_right">
		<h1>移动验房系统,重新定义验房</h1>
		<div class="summary_p">
			<p>移动验房系统，重新定义验房优化传统验房的繁琐流程，替代纸质化验房记录，利用互联网移动办公设备，验房问题标准块化，问题分类汇总，职责分类明确，查验整改清晰，全程可<br>实时监控，实现高效验房。</p>
		</div>
		<div class="many_p">
			<p>1.移动验房产品，实时登记提交现场验房问题情况，统一提交验房结果；</p>
			<p>2.验房缺陷数据多种户型全覆盖，只需选择即可完成验房问题的登记，方便快捷，提交工作效率，规范化、标准化登记问题的内容；</p>
			<p>3.支持拍照上传，直观记录验房现场的图像，准确记录验房问题；</p>
			<p>4.直接通过手机APP实现手写签字确认，永久保存验房记录的签字结果，方便、快捷；</p>
			<p>5.验房信息全面：满足物业公司对验房复验情况详细记录的查询，验房问题的调度审核，查询跟进各问题分类的整改进度情况报表。</p>
		</div>		
	</div>
</div>
<style type="text/css">
	.vue_store_img{
		background: url('__STATIC_PATH__/static/productintro/images/yf-bg.png') center no-repeat;
		width: 100%;
		height: 750px;
		margin-top: 150px;
		overflow: hidden;
	}
	.vue_store_img .img_left{
		margin-top: 80px;
		margin-left: 150px;
		float: left;
	}
	.vue_store_img .word_right{
		float: right;
		margin-top: 180px;
		margin-right: 25px;
		color: white;
		width: 640px;
	}
	.vue_store_img .word_right h1{
		font-size: 30px;
	}
	.vue_store_img .word_right .summary_p{
		margin-top: 30px;
		line-height: 24px;
	}
	.vue_store_img .word_right .many_p{
		margin-top: 60px;
		line-height: 24px;
	}
	.vue_store_img .word_right .many_p p{
		margin-bottom: 20px;
	}
</style>

<!--网上物业管理系统，为高效而生vue_internet部分-->
<div id="vue_internet">
	<div class="vue_internet">
		<h1>网上物业管理系统，为高效而生</h1>
		<div class="zr_header">
			<ul>
				<li v-on:click='changeHead(1)' v-bind:class='{bg_green:changeNum_head==1}'>网上物业系统</li>
				<li v-on:click='changeHead(2)' v-bind:class='{bg_green:changeNum_head==2}'>物业APP</li>
				<li v-on:click='changeHead(3)' v-bind:class='{bg_green:changeNum_head==3}'>业主APP</li>
			</ul>
		</div>
		<div v-if='changeNum_head==1' class="container1">
			<div class="h3_p">
				<ul>
					<li>
						<h3>基础数据管理</h3>
						<p>搭建和管理 小区、房产、物业人员、账户、客户等基础数据信息，打造物业整体平台基础框架 建设支撑其他应用系统、APP的应用和服务。</p>
					</li>
					<li>
						<h3>客户服务管理</h3>
						<p>物业公司提供面向业主的多渠道的服务窗口，满足业主及时了解物业通知和物业品质的服务， 并进行投诉、报修和意见建议的诉求，并形成服务闭环。</p>
					</li>
					<li>
						<h3>财务管理</h3>
						<p>周期性和临时性收付费模式，操作方便、页面简洁，多维度财务数据报表的支撑，具有标准 化、精细化、实时性等特点。</p>
					</li>
					<li>
						<h3>设施设备巡检系统</h3>
						<p>掌控和管理设施设备的全生命周期情况，移动APP线下采集登记设施设备状态及信息，帮助 集团及物业公司能够实时有效的了解设备的状态及巡检维保计划执行完成情况。</p>
					</li>
					<li>
						<h3>品质核查管理系统</h3>
						<p>好的品质是盯出来的，通过统一标准和移动终端,，核查和监督现场的品质核查工作。提升工 作效率和管理品质。</p>
					</li>
				</ul>
				
			</div>
			<div class="img_right">
				<img src="__STATIC_PATH__/static/productintro/images/wswy1.png"/>
			</div>
		</div>
		<div v-if='changeNum_head==2' class="container2">
			<div class="many_p">
				<p>1.云端通讯录，不存号码也能找到同事，沟通更便捷；</p>
				<p>2.移动报修处理，实时接收派单任务，进行接单报修处理，回访工作，提交物业服务质量；</p>
				<p>3.实时接收查看最新发布的公告通知信息，随时随地，方便快捷；</p>
				<p>4.无纸化移动验房，只需通过选择即可完成验房问题登记，支撑拍照上传，业主可在手机上 进行签字确认验房结果，提升提升验房工作效率；</p>
			</div>
			<div class="img_right">
				<img src="__STATIC_PATH__/static/productintro/images/wswy2.png"/>
			</div>
		</div>
		<div v-if='changeNum_head==3' class="container3">
			<div class="many_p">
				<p>1.物业费、水电费、停车费、生活服务等在线缴纳，足不出户，方便快捷；</p>
				<p>2.移动报修投诉，支持文字、语音、图片，实现多元化内容描述，使问题更加清晰明了；</p>
				<p>3.随时掌握物业通知、物业风采、业主须知等资讯；</p>
				<p>4.连接小区智能设备，享受APP掌上智慧生活新模式；</p>
				<p>5.邻里互动，小区邻里活动的沟通交流平台，打造美好的小区邻里氛围；</p>
				<p>6.轻松实现社区O2O在线交易，线上选购周边商家商品，享受线上优惠活动</p>
			</div>
			<div class="img_right">
				<img src="__STATIC_PATH__/static/productintro/images/wswy3.png"/>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.vue_internet{
		margin: 0px;
		padding: 0px 20px;
		list-style: none;
		margin-top: 95px;
	}
	.vue_internet h1{
		font-size: 30px;
		text-align: center;
		color: #333;
	}
	.vue_internet .zr_header ul{
		overflow: hidden;
		margin-top: 65px;
		padding-left: calc(50% - 330px);
	}
	.vue_internet .zr_header ul li{
		width: 200px;
		height: 40px;
		background: #ededed;
		text-align: center;
		float: left;
		list-style: none;
		line-height: 40px;
		font-size: 18px;
		margin-right: 20px;
		cursor: pointer;
	}
	.vue_internet .zr_header ul li:hover{
		background: #49d075;	
		color: #ffffff;	
	}
	.vue_internet .zr_header ul .bg_green{
		background: #49d075;	
		color: #ffffff;	
	}
	/*网上物业系统*/
	.vue_internet .container1{
		margin-top: 90px;
		position: relative;
		overflow: hidden;
	}
	.vue_internet .container1 .h3_p{
		float: left;
		margin-left: 80px;
	}
	.vue_internet .container1 .img_right{
		float: left;
		position: absolute;
		top: 100px;
		right: 70px;
	}
	.vue_internet .container1 .h3_p ul{
		width: 600px;
		color: #3D3D3D;
	}
	.vue_internet .container1 .h3_p ul li{
		margin-bottom: 30px;
		list-style: none;
	}
	.vue_internet .container1 .h3_p ul li h3{
		font-size: 24px;
		font-weight: 100;
		line-height: 40px;		
	}
	.vue_internet .container1 .h3_p ul li p{
		font-size: 16px;
		line-height: 26px;
	}
	/*物业APP*/
	/*业主APP*/
	.vue_internet .container2,.vue_internet .container3{
		margin-top: 90px;
		position: relative;
		overflow: hidden;
		height: 700px;
	}
	.vue_internet .container2 .many_p,.vue_internet .container3 .many_p{
		float: left;
		width: 600px;
		color: #3D3D3D;
		margin-left: 150px;
		margin-top: 100px;
	}
	.vue_internet .container3 .many_p{
		margin-top: 50px;
	}
	.vue_internet .container2 .img_right,.vue_internet .container3 .img_right{
		float: left;
		position: absolute;
		top: 0px;
		right: 150px;
	}
	.vue_internet .container2 .many_p p,.vue_internet .container3 .many_p p{
		margin-bottom: 60px;
		font-size: 16px;
		line-height: 26px;
	}
	/*进场/点击时的动画，兼容其他浏览器*/
	.vue_internet .container1{
		animation: click_show1 0.5s;
		-moz-animation: click_show1 0.5s;
		-webkit-animation: click_show1 0.5s;
		-moz-animation: click_show1 0.5s;
		position: relative;
	}
	.vue_internet .container2{
		animation: click_show2 0.5s;
		-moz-animation: click_show2 0.5s;
		-webkit-animation: click_show2 0.5s;
		-moz-animation: click_show2 0.5s;
		position: relative;
	}
	.vue_internet .container3{
		animation: click_show3 0.5s;
		-moz-animation: click_show3 0.5s;
		-webkit-animation: click_show3 0.5s;
		-moz-animation: click_show3 0.5s;
		position: relative;
	}
	
	/*动画1*/
	@keyframes click_show1{
		from{top:-80px;}
		to{top:0px;}
	}
	@-moz-keyframes click_show1{
		from{top:-80px;}
		to{top:0px;}
	}
	@-webkit-keyframes click_show1{
		from{top:-80px;}
		to{top:0px;}
	}
	@-ms-keyframes click_show1{
		from{top:-80px;}
		to{top:0px;}
	}
	/*动画2*/
	@keyframes click_show2{
		from{top:-80px;}
		to{top:0px;}
	}
	@-moz-keyframes click_show2{
		from{top:-80px;}
		to{top:0px;}
	}
	@-webkit-keyframes click_show2{
		from{top:-80px;}
		to{top:0px;}
	}
	@-ms-keyframes click_show2{
		from{top:-80px;}
		to{top:0px;}
	}
	/*动画3*/
	@keyframes click_show3{
		from{top:-80px;}
		to{top:0px;}
	}
	@-moz-keyframes click_show3{
		from{top:-80px;}
		to{top:0px;}
	}
	@-webkit-keyframes click_show3{
		from{top:-80px;}
		to{top:0px;}
	}
	@-ms-keyframes click_show3{
		from{top:-80px;}
		to{top:0px;}
	}
</style>

<script type="text/javascript">
	new Vue({
		el:'#vue_internet',
		data:{
			changeNum_head:1
		},
		methods:{
			changeHead:function(num){
				this.changeNum_head=num;
			}
		}
	});

</script>

<!--网上物业管理系统，为高效而生vue_internet_img部分-->
<div class="vue_internet_img">
	<div class="img_left">
		<img src="__STATIC_PATH__/static/productintro/images/sq.png"/>
	</div>
	<div class="word_right">
		<h1>社区运营,为生活添彩</h1>
		<div class="many_p">
			<p>1.裂变/返利营销：邀请好友赠送红包、优惠券，对于参与营销活动的缴费用 户赠送本小区消费的优惠券，抢占更多用户，提升商户与业主的互动性；</p>
			<p>2.广告营销：拓展物业收入，提升商户在小区的影响力，互利双赢模式；</p>
			<p>3.支持拍照上传，直观记录验房现场的图像，准确记录验房问题；</p>
			<p>4.直接通过手机APP实现手写签字确认，永久保存验房记录的签字结果，方便、快捷；</p>
			<p>5.验房信息全面：满足物业公司对验房复验情况详细记录的查询，验房问题的调度审核，查<br>询跟进各问题分类的整改进度情况报表。</p>
		</div>		
	</div>
</div>
<style type="text/css">
	.vue_internet_img{
		background: url('__STATIC_PATH__/static/productintro/images/sq-bg.png') center no-repeat;
		width: 100%;
		height: 690px;
		overflow: hidden;
	}
	.vue_internet_img .img_left{
		float: left;
		margin-top: 170px;
		margin-left: 35px;
	}
	.vue_internet_img .word_right{
		float: left;
		color: white;
		margin-top: 205px;
		margin-left: 105px;
	}
	.vue_internet_img .word_right h1{
		font-size: 30px;
	}
	.vue_internet_img .word_right .many_p{
		line-height: 24px;
		width: 550px;
		margin-top: 60px;
	}
	.vue_internet_img .word_right .many_p p{
		margin-bottom: 25px;
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

