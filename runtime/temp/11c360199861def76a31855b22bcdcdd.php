<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:88:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\companyintro\index.html";i:1509505594;s:83:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\common\header.html";i:1508310960;s:81:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\public\head.html";i:1509504145;s:104:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\companyintro\header_img\header_img.html";i:1508577510;s:118:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\companyintro\company_coursepic\company_coursepic.html";i:1508485794;s:122:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\companyintro\software_show_lunbo\software_show_lunbo.html";i:1508584606;s:81:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\public\foot.html";i:1509505509;s:83:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\common\footer.html";i:1508310960;}*/ ?>
<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="__STATICPATH__/static/js/common.js"></script>
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
	<div class="bc_navlistbar">
		<div class="header"> <!-- 头部导航 -->
			<div class="header_l">
				<img src="__STATICPATH__/static/images/nav_foot/logo1.jpg" alt="">
			</div>
			<div class="header_m">
				<ul class="header_m_ul">
					<li class="index"><a href="<?php echo url('/index/index/index'); ?>">首页</a></li>
					<li class="productintro"><a href="<?php echo url('/index/productintro/index'); ?>">产品简介</a></li>
					<li class="hezuo">合作专区
						<span class="glyphicon glyphicon-chevron-down"></span>
						<div class="hezuo_hide">
							<ul>
								<li class="cityopration"><a href="<?php echo url('/index/cityopration/index'); ?>">城市运营商</a></li>
								<li class="advertise"><a href="<?php echo url('/index/advertise/index'); ?>">广告合作</a></li>
								<li class="property"><a href="<?php echo url('/index/property/index'); ?>">物业合作</a></li>
								<li class="develop"><a href="<?php echo url('/index/develop/index'); ?>">开发商合作</a></li>
							</ul>
						</div>
					</li>
					<li class="companyintro"><a href="<?php echo url('/index/companyintro/index'); ?>">企业简介</a></li>
					<li class="newslist"><a href="<?php echo url('/index/newslist/index'); ?>">新闻动态</a></li>
					<li class="connectus"><a href="<?php echo url('/index/connectus/index'); ?>">联系我们</a></li>
					<li class="getapp"><a href="<?php echo url('/index/getapp/index'); ?>">App下载</a></li>
				</ul>
			</div>
			<div class="header_r">
				<span class="glyphicon glyphicon-hand-right"></span>
				<span>全国招商热线 : 400-8090-590</span>
			</div>
			<div id="donghuakuang"></div>
		</div>
	</div>
	

	
<link type="text/css" rel="stylesheet" href="__STATICPATH__/static/m_css/head.css" />
<script type="text/javascript" src="__STATICPATH__/static/m_js/head.js" ></script>
<script src="https://cdn.bootcss.com/vue/2.4.4/vue.min.js"></script>

<div class="m-header"> <!-- 头部导航 -->
	<div class="m_head">
		<img src="__STATICPATH__/static/m_images/index/logo1.jpg" alt="">
		<span>招商热线 : 400-8090-590</span>
	</div>
	<div>
		<ul class="m_head_ul">
			<li class="productintro"><a href="<?php echo url('/index/productintro/index'); ?>">产品简介</a></li>
			<li class="companyintro"><a href="<?php echo url('/index/companyintro/index'); ?>">企业简介</a></li>
			<li class="m_hezuo" value="0">合作专区
				<span class="glyphicon glyphicon-chevron-down"></span>
				<div class="m_hezuo_hide">
					<ul class="m_hide_ul">
						<li class="cityopration"><a href="<?php echo url('/index/cityopration/index'); ?>">城市运营商</a></li>
						<li class="advertise"><a href="<?php echo url('/index/advertise/index'); ?>">广告合作</a></li>
						<li class="property"><a href="<?php echo url('/index/property/index'); ?>">物业合作</a></li>
						<li class="develop"><a href="<?php echo url('index/develop/index'); ?>">开发商合作</a></li>
					</ul>
				</div>
			</li>
			<li class="newslist"><a href="<?php echo url('index/newslist/index'); ?>">新闻动态</a></li>
			<li class="connectus"><a href="<?php echo url('index/connectus/index'); ?>">联系我们</a></li>
		</ul>
	</div>
</div>

<!--引入头部图片-->
<div class="header_img">
</div>
<style type="text/css">
.header_img {
    background: url('__STATIC_PATH__/static/companyintro/images/banner.jpg') center no-repeat;
    width: 100%;
    height: 400px;
    margin-top: 80px;
    background-size: 100% 100%;
}


/* media 1280 */

@media screen and (max-width:1280px) {
    .header_img {
    	width: 100%;
        height: 260px;
    }
}
    
@media screen and (max-width:960px) {
    .header_img {
        height: 200px;
    }
}

@media screen and (max-width:640px) {
    .header_img {
        height: 150px;
    }
}
</style>

<!--引入认识乐住模块-->
<style type="text/css">
.know_lezhu {
    width: 1280px;
    margin: auto;
}

.know_lezhu h1 {
    padding-left: 20px;
    border-left: 6px solid #49d074;
    font-size: 30px;
    height: 33px;
    line-height: 33px;
    margin-bottom: 45px;
}

.know_lezhu .many_p {
    color: #777;
    font-size: 16px;
}

.know_lezhu .many_p p {
    margin-bottom: 50px;
    line-height: 22px;
}

.know_lezhu .many_p span {
    display: inline-block;
    margin: 40px 0;
}

.know_lezhu .many_p img {
    width: 100%;
    margin-top: 50px;
}

/* media 1280 */

@media screen and (max-width:1280px) {
    .know_lezhu {
        width: 960px;
    }
    .know_lezhu .many_p{
        padding:0 25px;
    }
}

/* media 960 */
@media screen and (max-width:960px) {
    .know_lezhu {
        width: 100%;
    }
    .know_lezhu .many_p{
        padding:0 25px;
    }
}

/* media 640 */
@media screen and (max-width:640px) {
    .know_lezhu {
        width: 100%;
    }
    .know_lezhu .many_p{
        padding:0 25px;
    }
}
</style>

<div class="know_lezhu">
    <h1>认识乐住</h1>
    <div class="many_p"> 
    	<?php echo $intro_content['intro_content']; ?>
</div>



<!--引入认识乐住pic模块-->


<!--引入认识公司历程模块-->
<div class="course">
	<div class="company_course">
    <h1>公司历程</h1>
    <ul>
       <?php foreach($history_list as $keys=>$value): if($keys%2 == 0): ?>
        <li>
            <div class="img_left">
                <img src="__STATIC_PATH__/static/companyintro/images/<?php echo $value['time_year']; ?>.png" />
            </div>
            <div class="img_right">
                <div class="h4_p">
                    <h4><?php echo $value['time_year']; ?></h4>
                    <p><?php echo $value['content']; ?></p>
                </div>
            </div>
        </li>
		<?php else: ?>
        <li>
            <div class="img_right">

                <div class="h4_p">
                     <h4><?php echo $value['time_year']; ?></h4>
                    <p><?php echo $value['content']; ?></p>
                </div>
            </div>
            <div class="img_left">
                <img src="__STATIC_PATH__/static/companyintro/images/<?php echo $value['time_year']; ?>.png" />
            </div>
        </li>
        <?php endif; endforeach; ?>
    </ul>
</div>
</div>

<style type="text/css">
img {
    width: 90%;
}

.course {
    background: #f4f4f4;
    width: 100%;
    overflow: hidden;
}

.company_course {
    width: 1280px;
    margin: auto;
}

.company_course h1 {
    padding-left: 20px;
    font-weight: bold;
    border-left: 6px solid #49d074;
    font-size: 30px;
    height: 33px;
    line-height: 33px;
    margin-bottom: 45px;
}

.company_course ul li {
    list-style: none;
    overflow: hidden;
    margin-bottom: 65px;
}

.company_course ul li .img_left {
    float: left;
    width: 18%;
}


/*.company_course ul li .img_left img {
	margin-left: 20px;
}*/

.company_course ul li .img_right {
    background: url('__STATIC_PATH__/static/companyintro/images/left.png') no-repeat;
    height: 196px;
    float: left;
    width: 65%;
}

.company_course ul li:nth-child(2n) .img_right {
    background: url('__STATIC_PATH__/static/companyintro/images/right.png') no-repeat;
    margin-left: 20px;
    margin-right: 40px;
}

.company_course ul li:nth-child(2n-1) .img_left {
    margin-right: 40px;
    margin-left: 20px;
}

.company_course ul li .img_right .h4_p {
    padding: 45px 65px;
}

.company_course ul li .img_right .h4_p h4 {
    color: #49d075;
    font-size: 20px
}

.company_course ul li .img_right .h4_p p {
    margin-top: 25px;
    color: #777;
    font-size: 16px;
}

.company_course ul li .img_right:hover .h4_p p {
    color: #49d075;
}


/* media 1280 */

@media screen and (max-width:1280px) {
    .company_course {
        width: 960px;
    }

    .company_course h1 {
        font-size: 26px;
        margin: 20px 0;
    }

    .company_course ul li {
        margin-bottom: 30px;
    }

    .company_course ul li .img_right .h4_p p {
        font-size: 14px;
    }
    .company_course ul li .img_right .h4_p h4 {
        margin: 0px;
    }
    .company_course ul li .img_right .h4_p p {
        margin-top: 12px;
        font-size: 14px;
    }
    .company_course ul li .img_right .h4_p {
        padding: 45px;
    }
}


/* media 960 */

@media screen and (max-width:960px) {
    .company_course {
        width: 100%;
    }

    .company_course h1 {
        font-size: 26px;
        margin: 20px 0;
    }

    .company_course ul li {
        margin-bottom: 30px;
    }

    .company_course ul li .img_left,
    .company_course ul li .img_right {
        height: 155px;
    }

    .company_course ul li .img_right .h4_p p {
        font-size: 14px;
    }
    .company_course ul li .img_right .h4_p h4 {
        margin: 0px;
    }
    .company_course ul li .img_right .h4_p p {
        margin-top: 12px;
        font-size: 14px;
    }
    .company_course ul li .img_right .h4_p {
        padding: 30px 30px 30px 70px;
    }
    .company_course ul li:nth-child(2n) .img_left img {
        width: 100%;
    }

    .company_course ul li:nth-child(2n-1) .img_left img {
        width: 100%;
    }
}


/* media 640 */

@media screen and (max-width:640px) {
    .company_course ul li .img_right .h4_p {
        padding: 20px 20px 20px 50px;
    }
    .company_course ul li .img_right .h4_p p {
        margin-top: 8px;
        font-size: 12px;
    }
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

	/* media 1280 */
	@media screen and (max-width: 1280px) {
		.company_coursepic{
			height: 380px;
		}
	}
</style>

<!--引入软件展示轮播模块-->
<div class="software_show_lunbo">
    <h1>软件著作权</h1>
    <div class="ul_move">
        <ul>
            <li>
                <img src="__STATIC_PATH__/static/companyintro/images/copyright1.jpg" />
            </li>
            <li>
                <img src="__STATIC_PATH__/static/companyintro/images/copyright2.jpg" />
            </li>
            <li>
                <img src="__STATIC_PATH__/static/companyintro/images/copyright3.jpg" />
            </li>
            <li>
                <img src="__STATIC_PATH__/static/companyintro/images/copyright4.jpg" />
            </li>
            <li>
                <img src="__STATIC_PATH__/static/companyintro/images/copyright5.jpg" />
            </li>
            <li>
                <img src="__STATIC_PATH__/static/companyintro/images/copyright6.jpg" />
            </li>
            <li>
                <img src="__STATIC_PATH__/static/companyintro/images/copyright1.jpg" />
            </li>
            <li>
                <img src="__STATIC_PATH__/static/companyintro/images/copyright2.jpg" />
            </li>
            <li>
                <img src="__STATIC_PATH__/static/companyintro/images/copyright3.jpg" />
            </li>
            <li>
                <img src="__STATIC_PATH__/static/companyintro/images/copyright4.jpg" />
            </li>
            <li>
                <img src="__STATIC_PATH__/static/companyintro/images/copyright5.jpg" />
            </li>
            <li>
                <img src="__STATIC_PATH__/static/companyintro/images/copyright6.jpg" />
            </li>
        </ul>
    </div>
</div>
<style type="text/css">
body{
	overflow-x: hidden;
}
.software_show_lunbo {
    margin-top: 75px;
    padding: 70px 20px 20px 20px;
}

.software_show_lunbo h1 {
    padding-left: 20px;
    border-left: 6px solid #49d074;
    font-size: 30px;
    height: 33px;
    line-height: 33px;
    margin-bottom: 45px;
}

.software_show_lunbo .ul_move {
    position: relative;
    height: 430px;
    overflow: hidden;
}

.software_show_lunbo .ul_move:hover ul {
    animation-play-state: paused;
}

.software_show_lunbo .ul_move ul {
    overflow: hidden;
    position: absolute;
    left: 0px;
    width: 300%;
    animation: move_ul_left 10s infinite linear;
}

.software_show_lunbo .ul_move ul li {
    list-style: none;
    float: left;
    width: 320px;
}

.software_show_lunbo .ul_move ul li img {
    margin-right: 20px;
    width: calc(100% - 20px);
}

@keyframes move_ul_left {
    from {
        left: 0px;
    }
    to {
        left: -1920px;
    }
}

@media screen and (max-width: 1280px) {
    .software_show_lunbo {
        width: 960px;
        margin: auto;
    }
    .software_show_lunbo h1 {
        font-size: 26px;
        margin: 30px 0 20px 0;
    }
    .ul_move{
    	width: 960px;
    	height: 410px;
    }
}
</style>

<!--引入公共导航尾部-->
<div class="bc_footlistbar">
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


<div class="m-footer"> <!-- 底部 -->
	<ul>
		<li>
			<a href="<?php echo url('index/index/index'); ?>">首页</a>
		</li>
		<li>
			<a href="">QQ咨询</a>
		</li>
		<li>
			<a href="">电话咨询</a>
		</li>
	</ul>
</div>

<!--引入公共尾部-->

	</body>
</html>

