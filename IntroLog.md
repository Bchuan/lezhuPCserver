
说明：
	


	拉回本地，需要修改application文件夹下的config.php文件，将
	“
	// 视图输出字符串内容替换
    'view_replace_str'       => [
        '__STATICPATH__' => '/php/project/lezhu/public'
    ],
	”
	中的__STATICPATH__路径修改成本地正确的路径。
	
	

10.13 17:00   by  BC

新增视图（application》index》view）：首页（index）、联系我们(connectus)、物业合作(property)、开发商合作(develop)、新闻动态列表(newslist)、新闻详情页(newsdeta)、app下载页(getapp)

新增视图模块（application》index》view》common）:首页模块（banner、count、luopan、video、cooperate、address）

公共模块（application》index》view》public）:头尾部PC（foot、head）

新增控制器（application》index》controller）:以上各路由进入页面



10.18 11:00   by  ZR

新增视图（application》index》view）：广告合作（advertise）、城市运营商(cityopration)、企业简介(companyintro)、产品简介(productintro)

新增视图模块（application》index》view》common）:ZR做的视图公共头部和尾部（header、footer）

公共模块（application》index》view》public）:头尾部PC（foot、head）

新增控制器（application》index》controller）：广告合作（Advertise）、城市运营商(Cityopration)、企业简介(Companyintro)、产品简介(Productintro)等各路由进入页面

新增页面静态资源（public》static）:广告合作（advertise）、城市运营商(cityopration)、企业简介(companyintro)、产品简介(productintro) 4个页面的图片

更改基本资源配置路径 （application》config.php》 'view_replace_str' ）:把原来的路径删了，改成了自己运行时的路径，有2条

修改解决冲突（application》index》view》common》foot.html head.html）:每个html里面都加了个大的div，避免和其他样式冲突
————————————（public》static》css》head.css）：html中加了一个大div，这里样式前面补加一个前缀
————————————（public》static》js》head.js）：html中加了一个大div，这里js相关操作获取变量前面补加一个前缀



10.18 16：40   by  ZR

修改开发者日记（IntroLog.md）：增加了2个版本的开发者日记，一个是ZR在前一个版本添加中缺少的开发者日记部分，一个是现在提交的开发者日记



