<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:81:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\index\index.html";i:1507886045;s:81:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\public\head.html";i:1508310960;s:83:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\common\banner.html";i:1507881860;s:82:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\common\count.html";i:1507880495;s:83:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\common\luopan.html";i:1507862898;s:82:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\common\video.html";i:1507884566;s:86:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\common\cooperate.html";i:1507865854;s:84:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\common\address.html";i:1507874590;s:81:"D:\wamp64\www\php\project\lezhu\public/../application/index\view\public\foot.html";i:1508310960;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>首页</title>
	<!-- <script src='http://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js'></script> -->
	<link rel="stylesheet" href="__STATICPATH__/static/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="__STATICPATH__/static/css/index.css">
	<script src="__STATICPATH__/static/js/swiper.min.js"></script>
	<script src="https://cdn.bootcss.com/jquery/3.1.0/jquery.min.js"></script>
	<script language="javascript" src="http://qzs.qq.com/tencentvideo_v1/js/tvp/tvp.player.js" charset="utf-8"></script>
</head>
<body>
<div class="container-index">
	
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
	
	
<!-- <link rel="stylesheet" href="__STATICPATH__/static/css/swiper.min.css">
<script src="__STATICPATH__/static/js/swiper.min.js"></script> -->
<style>
.banner{
    overflow: hidden;
}
	.banner .swiper-slide{
		max-height: 500px;
        width: 100%;
	}
    .banner .swiper-slide img{
        width: 100%;
        vertical-align: middle;
    }
    .banner .swiper-button-prev,.swiper-button-next{
        opacity: 0.3;
    }
    .banner .swiper-button-prev:hover,.swiper-button-next:hover{
        opacity: 1;
    }
</style>
	<div class="swiper-container swiper-container-horizontal banner">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="www.baidu.com"><img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/banner3.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="www.baidu.com"><img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/banner4.jpg" alt=""></a>
            </div>

            <div class="swiper-slide">
                <a href="www.baidu.com"><img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/banner1.jpg" alt=""></a>
            </div>

            <div class="swiper-slide">
                <a href="www.baidu.com"><img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/banner2.jpg" alt=""></a>
            </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
        	<span class="swiper-pagination-bullet"></span>
        	<span class="swiper-pagination-bullet"></span>
        	<span class="swiper-pagination-bullet"></span>
        	<span class="swiper-pagination-bullet"></span>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
<script>
    var swiper = new Swiper('.banner', {
        pagination: '.swiper-pagination',
        loop:true,
        paginationClickable: true,
        autoplay : 5000,
        autoplayDisableOnInteraction : false,
        grabCursor : true,
        prevButton:'.swiper-button-prev',
        nextButton:'.swiper-button-next',
    });
    </script>
	
<style>
	.count{
		width: 100%;
	    height: 302px;
	    background: url(__STATICPATH__/static/images/index/bg-data.jpg) no-repeat left center;
	}
	.count ul>li{
		float: left;
		width: 25%;
		text-align: center;
		padding-top: 100px;
	}
	.count>ul>li>span{
		font-size: 50px;
    	color: #fff;
	}
	.count>ul>li>p{
		font-size: 20px;
    	color: #b5cdff;
	}
    @media screen and (max-width:769px){
      .count{
        height: 120px;
      }
      .count ul>li{
        padding-top: 30px;
     }
     .count>ul>li>span{
        font-size: 25px;
     }
      .count>ul>li>p{
        font-size: 16px;
     }

    }
</style>
	<div class="count">
		<ul>
	        <li class="counter col_fourth">
	            <span class="timer count-title" id="count-number" data-to="536" data-speed="1500"></span>
	            <span class="count-title">+</span>
	            <p class="child">已覆盖楼盘</p>
	        </li>
	        <li class="counter col_fourth">
	            <span class="timer count-title" id="count-number" data-to="8" data-speed="1500"></span>
	            <span class="count-title">+</span>
	            <p class="child">始于2009</p>
	        </li>
	        <li class="counter col_fourth">
	            <span class="timer count-title" id="count-number" data-to="300" data-speed="1500"></span>
	            <span class="count-title">+</span>
	            <p class="child">媒体推荐</p>
	        </li>
	        <li class="counter col_fourth">
	            <span class="timer count-title" id="count-number" data-to="10000" data-speed="5500"></span>
	            <span class="count-title">+</span>
	            <p class="child">实名用户</p>
	        </li>
	    </ul>
	</div>
	

<script>
	$.fn.countTo = function (options) {
        options = options || {};
        
        return $(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from:            $(this).data('from'),
                to:              $(this).data('to'),
                speed:           $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals:        $(this).data('decimals')
            }, options);
            
            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;
            
            // references & variables that will change with each update
            var self = this,
                $self = $(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};
            
            $self.data('countTo', data);
            
            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);
            
            // initialize the element with the starting value
            render(value);
            
            function updateTimer() {
                value += increment;
                loopCount++;
                
                render(value);
                
                if (typeof(settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }
                
                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;
                    
                    if (typeof(settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }
            
            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
            }
        });
    };
    
    $.fn.countTo.defaults = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 1000,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };
    
    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
  // custom formatting example
  $('#count-number').data('countToOptions', {
    formatter: function (value, options) {
      return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    $this.countTo(options);
  }
</script>

	
<style>
	li{
		list-style: none;
	}

	.big-box{
		width: 100%;
		height: auto;
	}
	.big-box a{
		display: inline-block;
		width: 100%;
	}
	.big-box-content{
		width: 90%;
		height: 100%;
		margin: auto;
	}
	.title{
		/*height: 160px;*/
		width: 100%;
	}

	.big-box .content-img{
		width: 100%;
		height: auto;
	}
	.big-box .content-img ul{
		width: 100%;
		overflow: hidden;
	}
	.big-box .content-img li{
		width: 23%;
		float: left;
		margin-right: 2%;
		overflow: hidden;
		position: relative;
	}
	.big-box .content-img li:hover .i-contro{
		height: 100% !important;
		line-height: 400px !important;
	}
	.big-box .content-img li:hover .bottom-title{
		border-bottom: 2px solid #44be3f;
	}
	.big-box .content-img li:last-child{
		margin-right: 0;
	}
	.big-box .content-img li img{
		width: 100%;
		vertical-align: middle;
	}
	.big-box .content-img li i{
		position: absolute;
		overflow: hidden;
		height: 70px;
		opacity: 0.5;
		line-height: 70px;
		text-align: center;
		width: 100%;
		bottom:86px; 
		left:0;
		font-style: normal;
    	font-size: 20px;
    	background: rgba(0,0,0,0.7);
    	color: #ccc;
    	transition: all 0.5s;
	}
	.bottom-title{
		width: 100%;
	    height: 84px;
	    line-height: 84px;
	    text-align: center;
	    font-size: 26px;
	    color: #333;
	    border-bottom: 2px solid #ccc;
	    transition: all 0.5s;
	}

	 @media screen and (max-width:769px){
     	 .big-box .content-img li{
			width: 48%;
	 	}
		.big-box .bottom-title{
			width: 100%;
		    height:30px;
		    line-height: 30px;
		    text-align: center;
		    font-size: 16px;
		    border-bottom: 2px solid #ccc;
		}
		.big-box .content-img li i{
			height: 50px;
			opacity: 0.5;
			line-height: 50px;
			bottom:30px; 
	    	font-size: 14px;
		}
		.big-box .content-img li:hover .i-contro{
			line-height: 300px !important;
		}
    }
</style>
	<div class="big-box">
	    <div class="big-box-content">
	        <div class="title">
	            <h3>楼盘全链条解决方案</h3>
	        </div>
	        <div class="border-bottom"></div>
	        <div class="content-img">
	            <ul>
	                <li>
	                    <a href=#">
	                    	<img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/Building1.jpg" alt="">
	                    	<i class="i-contro">智慧小区体验馆</i>
	                    </a>
	                    <div class="bottom-title">楼盘销售</div>
	                </li>
	                <li>
	                    <a href=#">
	                    	<img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/Building2.jpg" alt="">
	                    	<i class="i-contro">移动验房系统</i>
	                    </a>
	                    <div class="bottom-title">楼盘交付</div>
	                </li>
	                <li>
	                    <a href=#">
	                    	<img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/Building3.jpg" alt="">
	                    	<i class="i-contro">网上物业系统</i>
	                    </a>
	                    <div class="bottom-title">楼盘入住</div>
	                </li>
	                <li>
	                    <a href=#">
	                    	<img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/Building4.jpg" alt="">
	                    	<i class="i-contro">商业运营</i>
	                    </a>
	                    <div class="bottom-title">楼盘运营</div>
	                </li>
	            </ul>
	        </div>
	    </div>
	</div>

	

<style>
	.video-box{
		display: inline-block;
	    width: 100%;
	    margin-top: 100px;
	    background: url(http://lezhu.tv/App/Tpl/Public/lzimg/index/bg-video.jpg) no-repeat left center;
	}
	.video-box-content{
		width: 90%;
		height: 100%;
		margin: auto;
	}
	.title{
		width: 100%;
	}
	.video-box .title h3{
		color: #fff;
		font-size: 36px;
    	font-weight: 200;
    	text-align: center;
    	margin: 84px 0 40px 0;
	}
	.border-bottom {
	    width: 60px;
	    height: 2px;
	    background-color: #ccc;
	    margin: auto;
	    margin-bottom: 50px;
	}
	
	.video-box .video-news{
	    overflow: hidden;
	    width: 100%;
	    background-color: #fff;
	    margin-bottom: 70px;
	}
	.videos{
		float: left;
	    width: 694px;
	    height: 450px;
	    padding: 60px 60px 0 60px;
	    position: relative;
	    display: none;
	    box-sizing: border-box;
	}
	.videos:first-child{
		display: block;
	}
	embed {
    width: 100%;
    height: 100%;
	}

	.new-media{
		margin: 60px 0;
    	overflow: hidden;
	}
	.new-media li{
		display: table;
	    vertical-align: middle;
	    text-align: center;
	    float: left;
	    width: 30%;
	    min-height: 80px;
	    transition: all 0.6s;
	}
	.new-media li:hover {
	    transform: scale(1.10);
	    -ms-transform: scale(1.10) cursor:pointer;
	}
	.new-media li a{
		display: table-cell;
    	vertical-align: middle;
	}
	.new-media li a img{
		width: 100%;
	}
	.video-news .min-media {
	    width: 100%;
	    background-color: #fff;
	    overflow: hidden;
	    box-sizing: border-box;
	    padding: 0 50px 30px 50px;
	}
	.video-news .min-media li {
		position: relative;
	    float: left;
	    width: 19%;
	    margin-top: 30px;
	    /*margin: 30px 0 10px 10px;*/
	    margin-bottom: 10px;
	    margin-left: 1%;
	}
	.video-news .min-media li span{
		position: absolute;
		display: inline-block;
		height: 100%;
		width: 100%;
		left: 0;
		top: 0;
	}
	.video-news .min-media li span:hover{
		box-shadow: 0 0 5px rgba(0,0,0,.7);
	}
	.video-news .min-media img {
	    display: inline-block;
	    width: 100%;
	    /*height: 100%;*/
	    vertical-align: middle;
	    transition: all 0.6s;
	}
	.video-box .swiper-container{
		height: 26px;
	    margin-bottom: 30px;
	}
	.video-box .swiper-container .swiper-slide{
		text-align: center;
	}
	/*移动端*/
	.video-minbox{
		width: 100%;
		height: auto;
		background: #f5f5fc;
	}
	.video-minbox .title{
		padding-top: 20px;
	}
	.video-minbox .title p{
		font-size: 22px;
		text-align: center;
	}
	.video-minbox .min-video{
		width: 100%;
		height: auto;
	}
	.video-minbox .min-video ul{
		display: table;
	}
	.video-minbox .min-video li{
		box-sizing: border-box;
		position: relative;
	}
	.video-minbox .min-video .video-first{
		width: 100%;
		float: left;
	}
	.video-minbox .min-video .video-minnav{
		width: 50%;
		padding-top: 10px;
		display:table-cell;
		float: left;
	}

	/*有问题start*/
	.video-minbox .min-video ul li:nth-child(2n){
		padding-right: 10px;
	}
	/*.video-minbox .min-video ul li:nth-child(2n+1){
		padding-left: 10px;
	}*/
	/*有问题end*/
	.video-minbox .min-video li img{
		display: inline-block;
	    width: 100%;
	    vertical-align: middle;
	}
	.video-minbox .min-video .video-minnav img{
		height: 150px;
	}
    .video-minbox .min-video li p{
    	color: #333;
	    margin-top: 5px;
	    text-align: center;
    }
	.video-minbox .min-video li span{
		position: absolute;
		display: inline-block;
		height: 45px;
		width: 45px;
		background: rgba(0,0,0,0.5);
		border-radius: 50%;
		z-index: 2;
		left: 50%;
		top: 50%;
		margin-top: -45px;
		margin-left: -30px;
	}
	.video-minbox .min-video li span i{
		display: block;
		width: 0;
	    height: 0;
	    border-top: 15px solid transparent;
	    border-left: 25px solid rgba(255,255,255,0.5);
	    border-bottom: 15px solid transparent;
	    margin: 8px 13px;
	}
	.video-minbox .video-shadow{
		position: fixed;
		height: 100%;
		width: 100%;
		background: rgba(0,0,0,0.5);
		left: 0;
		top: 0;
		z-index: 10;
		display: none;
	}
	.video-minbox .video-view{
		width: 100%;
		position: fixed;
		left: 0;
		top: 0;
		margin:10% 0 0 0; 
		z-index: 11;
		display: none;
	}
	.video-minbox .video-view embed{
		width: 100%;
		height: 300px;
		/*display: none;*/
	}
	.video-minbox{
	 	display: none;
	 }

	@media screen and (max-width:1080px){
	  	.videos{
		    width: 620px;
		}
		.new-media{
			margin-bottom: 0;
		}
		.new-media li{
		    width: 50%;
		    text-align: center;
		}
		.new-media li{
			width: 100px;
		}
	}
	@media screen and (max-width:930px){
	  	.videos{
		    width: 100%;
		}
		.new-media {
		   display: none;
		}
	}
	@media screen and (max-width:769px){
	  .video-box{
	  	display: none;
	  }

	  .video-minbox{
	  	display: block;
	  }
	}
</style>
	<div class="video-box">
	    <div class="video-box-content">
	        <div class="title">
	            <h3>智慧社区：一部手机刷遍小区里，打造楼盘新名片！</h3>
	        </div>
	        <div class="border-bottom"></div>
	        <div class="video-news">
	        	<div class="videos">
	        		<embed class="player" src="https://imgcache.qq.com/tencentvideo_v1/playerv3/TPout.swf?max_age=86400&amp;v=20161117&amp;vid=j0501cwp1k0&amp;auto=1" loop="loop" type="application/x-shockwave-flash">
	        	</div>
	        	<div class="videos">
	        		<embed class="player" src="https://imgcache.qq.com/tencentvideo_v1/playerv3/TPout.swf?max_age=86400&v=20161117&vid=c05510wecrz&auto=1" loop="loop" type="application/x-shockwave-flash">
	        			<!-- https://v.qq.com/x/page/c05510wecrz.html -->
	        	</div>
	        	<div class="videos">
	        		<embed class="player" src="http://imgcache.qq.com/tencentvideo_v1/playerv3/TPout.swf?vid=z05498yaley&amp;max_age=86400&amp;v=20161117&amp;auto=1" loop="loop" type="application/x-shockwave-flash">
	        			<!--https://v.qq.com/x/page/z05498yaley.html -->
	        	</div>
	        	<div class="videos">
	        		<embed class="player" src="https://imgcache.qq.com/tencentvideo_v1/playerv3/TPout.swf?max_age=86400&v=20161117&vid=e05530f5pqg&auto=1" loop="loop" type="application/x-shockwave-flash">
	        	</div>
	        	<div class="videos">
	        		<embed class="player" src="https://imgcache.qq.com/tencentvideo_v1/playerv3/TPout.swf?max_age=86400&v=20161117&vid=b0549ejmv9d&auto=1" loop="loop" type="application/x-shockwave-flash">
	        	</div>
	        	<div class="new-media">
	        		<ul>
	        			<li><a href="#"><img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/media1.jpg" alt=""></a></li>
	        			<li><a href="#"><img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/media1.jpg" alt=""></a></li>
	        			<li><a href="#"><img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/media1.jpg" alt=""></a></li>
	        			<li><a href="#"><img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/media1.jpg" alt=""></a></li>
	        			<li><a href="#"><img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/media1.jpg" alt=""></a></li>
	        			<li><a href="#"><img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/media1.jpg" alt=""></a></li>
	        			<li><a href="#"><img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/media1.jpg" alt=""></a></li>
	        			<li><a href="#"><img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/media1.jpg" alt=""></a></li>
	        			<li><a href="#"><img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/media1.jpg" alt=""></a></li>
	        		</ul>
	        	</div>
	        	<div class="min-media">
	                <ul>
	                    <li class="video-nav" video="2" vid="2">
	                        <img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/video-image1.png" alt="">
	                        <span></span>
	                    </li>
	                    <li class="video-nav" video="3" vid="3">
	                        <img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/video-image2.png" alt="">
	                        <span></span>
	                    </li>
	                    <li class="video-nav" video="4" vid="4">
	                        <img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/video-image3.png" alt="">
	                        <span></span>
	                    </li>
	                    <li class="video-nav" video="5" vid="5">
	                        <img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/video-image4.png" alt="">
	                        <span></span>
	                    </li>
	                    <li class="video-nav" video="6" vid="6">
	                        <img src="http://lezhu.tv/App/Tpl/Public/lzimg/index/video-image5.png" alt="">
	                        <span></span>
	                    </li>
	                </ul>
	            </div>

	            <div class="swiper-container news-swiper">
				    <div class="swiper-wrapper">
				        <div class="swiper-slide">Slide 1</div>
				        <div class="swiper-slide">Slide 2</div>
				        <div class="swiper-slide">Slide 3</div>
				        <div class="swiper-slide">Slide 4</div>
				    </div>
				</div>
	        </div>
	    </div>
	</div>

	<div class="video-minbox">
		<div class="video-box-content">
	        <div class="title">
	            <p>智慧社区</p>
	            <p>一部手机刷遍小区里，打造楼盘新名片！</p>
	        </div>
	        <div class="border-bottom"></div>
	        <div class="min-video">
	        	<ul>
		        	<li class="video-first mvideo">
                     
                        <img src="http://www.lezhu.tv/Upload/ueditor/image/20170606/1496732088321338.png" alt="中央13台《面对面》（乐住专访）">
                        <p>中央13台《面对面</p>
                        <span><i></i></span>
                    </li>
		        	<li class="video-minnav mvideo">
		              
                        <img src="http://www.lezhu.tv/Upload/ueditor/image/20151229/1451381521753614.png" alt="中央13台《面对面》（乐住专访）">
                        <p>中央13台《面对面</p>
                        <span><i></i></span>
		            </li>
		        	<li class="video-minnav mvideo">
		              
                        <img src="http://www.lezhu.tv/Upload/ueditor/image/20151229/1451381521753614.png" alt="中央13台《面对面》（乐住专访）">
                        <p>中央13台《面对面</p>
                        <span><i></i></span>
		            </li>
		            <li class="video-minnav mvideo">
		              
                        <img src="http://www.lezhu.tv/Upload/ueditor/image/20151229/1451381521753614.png" alt="中央13台《面对面》（乐住专访）">
                        <p>中央13台《面对面</p>
                        <span><i></i></span>
		            </li>
		            <li class="video-minnav mvideo">
		              
                        <img src="http://www.lezhu.tv/Upload/ueditor/image/20151229/1451381521753614.png" alt="中央13台《面对面》（乐住专访）">
                        <p>中央13台《面对面</p>
                        <span><i></i></span>
		            </li>
		        </ul>
	        </div>
	        <div class="video-shadow"></div>
	        <div class="video-view" id="playpoint">
	        	
	        </div>
	    </div>
	</div>
<script>
	$(function(){
		var screenwidth=$(window).width();
		//监听屏幕可视宽度
		$(window).resize(function () {          //当浏览器大小变化时
			screenwidth=$(window).width();
			console.log($(window).width()+'//浏览器时下窗口可视区域宽度'); 
		    // console.log($(window).height()+'//浏览器时下窗口可视区域高度');          //浏览器时下窗口可视区域高度
		    // console.log($(document).height()+'//浏览器时下窗口文档的高度');        //浏览器时下窗口文档的高度
		    // console.log($(document.body).height()+'//浏览器时下窗口文档body的高度');   //浏览器时下窗口文档body的高度
		    // console.log($(document.body).outerHeight(true)+'//浏览器时下窗口文档body的总高度 '); //浏览器时下窗口文档body的总高度 包括border padding margin
		});

		//页面加载完毕时
		//获取视频id存起来
		var videoid=['j0501cwp1k0','c05510wecrz','z05498yaley','e05530f5pqg','b0549ejmv9d'];

		//pc页面切换视频
		$('.video-nav').each(function(index){
			$(this).click(function(){
				console.log(index);
				$('.videos').each(function(){
					$(this).css({"display":"none"})
				})
				$('.videos').eq(index).css({"display":"block"})
			})
		})
		
		//pc页面时，新闻热点轮播
		var mySwiper = new Swiper ('.news-swiper', {
		   direction: 'vertical',
		   loop: true,
		   autoplay: 5000,
		})      

		//移动页面时，视频点击播放
		$('.mvideo').each(function(index){
			$(this).click(function(){
				console.log(index)
				$('.video-minbox .video-shadow').css({"display":"block"});
				$('.video-minbox .video-view').css({"display":"block"});
				btn(videoid[index]);
			})
		})
		//移动页面时，视频弹框关闭
		$('.video-minbox .video-shadow').click(function(){
			$(this).css({"display":"none"});
			$('.video-minbox .video-view').css({"display":"none"}).html('');

		})

		//腾讯视频api调用，移动端调用
		var video = new tvp.VideoInfo(); 
		function btn(id){  
	             video.setVid(id);  
	             var player = new tvp.Player(screenwidth,390);  
	             player.setCurVideo(video);  
	             player.addParam("autoplay","1");  
	             player.addParam("adplay","0");  
	             player.addParam("player","html5"); 
	             // player.addParam("pic","http://img.lanrentuku.com/img/allimg/1604/14603400449013.jpg");  
	             player.write("playpoint");  
		}   
	})
</script>

	
<style>
	.cooperate{
		width: 100%;
	}
	.cooperate-content{
		width: 90%;
		height: 100%;
		margin: auto;
	}

	.title{
		width: 100%;
	}
	.cooperate .title h3{
		color: #333;
	}

	.border-bottom {
	    width: 60px;
	    height: 2px;
	    background-color: #ccc;
	    margin: auto;
	    margin-bottom: 50px;
	}
	
	.cooperate .login-list{
		/*margin: 60px 0;*/
    	overflow: hidden;
	}
	
	.cooperate .login-list li{
		display: table;
	    vertical-align: middle;
	    text-align: center;
	    float: left;
	    width: 25%;
	    height: 80px;
	    margin-bottom: 20px;

	    /*transition: all 0.6s;*/
	}
	 .cooperate .login-list li img{
		width: 70%;
	  }
	.cooperate .login-list li span{
		font-size: 30px;
		text-align: center;
		color: #ccc;
	}
	.cooperate .login-list li:last-child{
		display: none;
	}
	@media screen and (max-width:769px){
	  .cooperate .login-list li{
	  	width: 33.3%;
	  	height: 40px !important;
	  }
	  .cooperate .login-list li:last-child{
		display: block;
	  }
	 .cooperate .login-list li img{
		width: 80%;
		/*vertical-align:middle;*/
	  }
	}
</style>

	<div class="cooperate">
	    <div class="cooperate-content">
	        <div class="title">
	            <h3>合作伙伴</h3>
	        </div>
			<div class="border-bottom"></div>
			<div class="login-list">
				<ul>
					<li>
						<img src="http://m.lezhu.tv/Wap/Tpl/Public/lzimg/index/title4.png" alt="">
					</li>
					<li>
						<img src="http://m.lezhu.tv/Wap/Tpl/Public/lzimg/index/title4.png" alt="">
					</li>
					<li>
						<img src="http://m.lezhu.tv/Wap/Tpl/Public/lzimg/index/title4.png" alt="">
					</li>
					<li>
						<img src="http://m.lezhu.tv/Wap/Tpl/Public/lzimg/index/title4.png" alt="">
					</li>
					<li>
						<img src="http://m.lezhu.tv/Wap/Tpl/Public/lzimg/index/title4.png" alt="">
					</li>
					<li>
						<img src="http://m.lezhu.tv/Wap/Tpl/Public/lzimg/index/title4.png" alt="">
					</li>
					<li>
						<img src="http://m.lezhu.tv/Wap/Tpl/Public/lzimg/index/title4.png" alt="">
					</li>
					<li>
						<img src="http://m.lezhu.tv/Wap/Tpl/Public/lzimg/index/title4.png" alt="">
					</li>
					<li>
						<span>+</span>
					</li>
				</ul>
			</div>
		</div>
	</div>

	
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=67jMQ5DmYTe1TLMBKFUTcZAR"></script>

<style type="text/css">

	.connect-index{
		width: 100%;
		height: auto;
		background: #f5f5fc;
	}
	.connect-content{
		width: 100%;
		height: 100%;
		margin: auto;
		overflow: hidden;
	}
	.connect-content .title h3{
		color:#000;
	}
	.connect-index .address{
		width: 100%;
		height: 503px;
	}
	.connect-index .address #dituContent{
		width:100%;
		height:100%;
/*		border:#ccc solid 1px;*/
	}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
    .BMap_cpyCtrl  
    {  
        display:none;   
    }  
    .anchorBL{  
        display:none;   
    }  
    .iw_poi_title{
        color: #bf0008;
        font-size: 14px;
    } 
    .iw_poi_content{
        font: 16px/30px "微软雅黑";
        color: #555;
    }
	.connect-min{
		width: 100%;
		
	}
	.connect-min .mincon-concent{
		width: 90%;
		margin: auto; 
		border-top: 1px solid #ccc;
	}
	.connect-min p{
		font-size: 16px;
		text-align: center;
	}
    .connect-min{
    	display: none;
    	color: #ddd;
    }
</style>

	<div class="connect-index">
	    <div class="connect-content">
	        <div class="title">
	            <h3>联系我们</h3>
	        </div>
			<div class="border-bottom"></div>
			<div class="address">
				<div id="dituContent"></div>
			</div>
		</div>
	</div>
	<div class="connect-min">
		<div class="mincon-concent">
			<p>联系我们</p>
			<p>全国招商热线:400-8090-590</p>
			<p>copyrightⓒ 2012-2018版权所有</p>
		</div>
	</div>
<script type="text/javascript">
   $(function(){
	   	 //创建和初始化地图函数：
	    function initMap(){
	        createMap();//创建地图
	        setMapEvent();//设置地图事件
	        addMapControl();//向地图添加控件
	        addMarker();//向地图中添加marker
	    }
	    
	    //创建地图函数：
	    function createMap(){
	        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
	        var point = new BMap.Point(116.403573,39.9239);//定义一个中心点坐标
	        map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
	        window.map = map;//将map变量存储在全局
	    }
	    
	    //地图事件设置函数：
	    function setMapEvent(){
	        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
	        // map.enableScrollWheelZoom();//启用地图滚轮放大缩小
	        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
	        map.enableKeyboard();//启用键盘上下左右键移动地图
	    }
	    
	    //地图控件添加函数：
	    function addMapControl(){
	        //向地图中添加缩放控件
		var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
		map.addControl(ctrl_nav);
	        //向地图中添加比例尺控件
		var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
		map.addControl(ctrl_sca);
	    }
	    
	    //标注点数组
	    var markerArr = [{title:"大神级别的总部",content:"地址：北京市紫禁城太和殿<br/>全国服务热线：010&nbsp;131490",point:"116.40342|39.923602",isOpen:1,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
			 ];
	    //创建marker
	    function addMarker(){
	        for(var i=0;i<markerArr.length;i++){
	            var json = markerArr[i];
	            var p0 = json.point.split("|")[0];
	            var p1 = json.point.split("|")[1];
	            var point = new BMap.Point(p0,p1);
				var iconImg = createIcon(json.icon);
	            var marker = new BMap.Marker(point,{icon:iconImg});
				var iw = createInfoWindow(i);
				var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
				marker.setLabel(label);
	            map.addOverlay(marker);
	            label.setStyle({
	                        borderColor:"#808080",
	                        color:"#333",
	                        cursor:"pointer"
	            });
				
				(function(){
					var index = i;
					var _iw = createInfoWindow(i);
					var _marker = marker;
					_marker.addEventListener("click",function(){
					    this.openInfoWindow(_iw);
				    });
				    _iw.addEventListener("open",function(){
					    _marker.getLabel().hide();
				    })
				    _iw.addEventListener("close",function(){
					    _marker.getLabel().show();
				    })
					label.addEventListener("click",function(){
					    _marker.openInfoWindow(_iw);
				    })
					if(!!json.isOpen){
						label.hide();
						_marker.openInfoWindow(_iw);
					}
				})()
	        }
	    }
	    //创建InfoWindow
	    function createInfoWindow(i){
	        var json = markerArr[i];
	        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
	        return iw;
	    }
	    //创建一个Icon
	    function createIcon(json){
	        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
	        return icon;
	    }
	    
	    initMap();//创建和初始化地图
   })
</script>

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
	
</div>
</body>
</html>