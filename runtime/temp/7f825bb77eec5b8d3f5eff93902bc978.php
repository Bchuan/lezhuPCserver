<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\newslist\index.html";i:1509523667;s:81:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\public\head.html";i:1509504145;s:81:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\public\foot.html";i:1509505509;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="Content-Language" content="zh-cn" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=0">
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="__STATICPATH__/static/js/common.js"></script>
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
	<div class="xinwen">
		<div class="xw_head">
			<img src="__STATICPATH__/static/images/newslist/xinwen02.png" alt="">
			<span>新闻动态</span>
		</div>
		
		<div class="lunbo"> <!-- 轮播图 -->
				<div class="swiper-container">
					<div class="swiper-button-prev swiper-button-black"></div>
   					<div class="swiper-wrapper">
   						<?php foreach($swiper_list as $value): ?>
     		   		 	<div class="swiper-slide">
     		   		 		<a href="<?php echo url('newsdata/index',['id'=>$value['id']]); ?>">
	     		   		 		<h3><?php echo $value['title']; ?></h3>
								<p>文章来源&nbsp;&nbsp;&nbsp;发布日期：<?php echo date('Y-m-s',$value['create_time']); ?></p>
	     		   		 		<img src="__STATICPATH__/static/images/newslist/xinwen03.png" alt="">
	     		   		 		<p class="neirong"><?php echo mb_substr($value['short_content'],0,30); ?>...</p>
     		   		 		</a>
     		   		 	</div>
     		   		 	<?php endforeach; ?>
      		    	</div>
      		   		<div class="swiper-button-next swiper-button-black"></div>
  				</div>
		</div>
		<div class="xiangqing"> <!-- 论坛 -->
			<ul>
				<?php foreach($news_list as $value): ?>
				<li>
					<div class="xq_l">
						<img src="__STATICPATH__/static/images/newslist/xinwen03.png" alt="">
					</div>
					<div class="xq_r xq_r1">
						<h4>
							<a href="<?php echo url('newsdata/index',['id'=>$value['id']]); ?>">
						<?php echo $value['title']; ?></a>
						</h4>
						<span>发布日期：<?php echo date('Y-m-s',$value['create_time']); ?></span>
						<p><?php echo $value['short_content']; ?></p>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="mulu"> <!-- 底部目录 -->
			<div>
				<span><?php echo $tol_list; ?></span>条记录&nbsp;&nbsp;
				<span><?php echo $pages['cur_page']; ?></span>/<?php echo $pages['tol_page']; ?>&nbsp;页&nbsp;&nbsp;
				<?php if($pages['cur_page'] == 1): ?>
				<a>上一页</a>
				<?php else: ?>
				<a href="<?php echo url('index',['cur_page'=>$pages['cur_page']-1]); ?>">上一页</a>
				<?php endif; if($pages['cur_page'] == $pages['tol_page']): ?>
				<a>下一页</a>
				<?php else: ?>
				<a href="<?php echo url('index',['cur_page'=>$pages['cur_page']+1]); ?>">下一页</a>
				<?php endif; foreach($pages['page_list'] as $keys=>$value): if($pages['cur_page'] == $keys): ?>
						<a class="active" href="<?php echo url('index',['cur_page'=>$keys]); ?>"><?php echo $keys; ?></a>
				<?php else: ?>
						<a href="<?php echo url('index',['cur_page'=>$keys]); ?>"><?php echo $keys; ?></a>
				<?php endif; endforeach; if($pages['cur_page'] == $pages['tol_page']): ?>
				<a>最后一页</a>
				<?php else: ?>
				<a href="<?php echo url('index',['cur_page'=>$keys]); ?>">最后一页</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
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