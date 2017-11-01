
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



10.19 11：50   by  ZR

修改视图（application》index》view》productintro》vue_store》vue_store.html）:去掉路由，修复了vue_store的vue路由被导航条冲突问题；
——————————（application》index》view》productintro》vue_internet》vue_internet.html），
——————————（application》index》view》productintro》vue_internetpic》vue_internetpic.html）修改了vue_internet和vue_internetpic中一些样式，解决在其他显示器显示效果不好问题；

修改视图（application》index》view》cityopration》market_prospect》market_prospect.html）：修改了market_prospect中2个圆形图片部分，解决在其他显示器显示效果不好问题；
——————————（application》index》view》cityopration》profit_budget》profit_budget.html）：给里面表单的th设置文字居中样式，来修改了bootstrap中th默认向左的样式
——————————（application》index》view》cityopration》cooperation_advantage》cooperation_advantage.html）：给里面单个盒子中的p设置margin为0，来修改了bootstrap中p默认margin-bottom为10的样式

修改视图（application》index》view》advertise》why_select》why_select.html）：修改了一下里面盒子的样式，让界面更美观点

更改基本资源配置路径 （application》config.php》 'view_replace_str' ）:增加了2条路径，以后如果有人要用，直接注释某一条，用完再弄回去，减少每次都要修改本条冲突

修改开发者日记（IntroLog.md）：增加 10.19 11：50 by ZR 这条



10.20 10:00   by  ZR

修改视图（application》index》view》cityopration》tv_report》tv_report.html）:修改了一个bootstrap自带的margin-bottom属性造成的浮动
——————————（application》index》view》cityopration》market_prospect》market_prospect.html）：清除浮动
——————————（application》index》view》cityopration》cooperation_advantage》cooperation_advantage.html）：给里面单个盒子中的p设置margin为0，来修改了bootstrap中p默认margin-bottom为10的样式

修改css样式（public》static》css》kaifashanghezuo.css）：7个盒子用百分比在不同屏幕4舍5入造成的小数使一个盒子下滑，改成了比较精确的小数，解决了下滑问题

更改基本资源配置路径 （application》index》view》develop》index.html ）:谷歌浏览器缓存问题，调试的时候改了一下路径

调试视图（application》index》view》cityopration》change_bar》change_bar.html）：调试了一下这个页面的导航条存在的bug，还没解决

修改开发者日记（IntroLog.md）：增加 10.20 10：00 by ZR 这条



11.1 16:44  by  BC

pc视图进行了数据绑定（application》index）：newslist(新闻动态)，newsdata(新闻详情)，companyintro(企业简介);
	对应控制器：Newslist,Newsdata,Companyintro添加数据库读取相应的数据。

添加手机端页面：所有。其中newslist(新闻动态)，newsdata(新闻详情)进行了数据绑定。

新建数据库lezhu（导入文件在根目录）: 
	表有：lz_company_intro（公司简介），lz_history（公司发展历史），lz_news（新闻列表）

添加后台（application》admin）：添加新闻，新闻列表管理，企业简介管理，企业简介编辑，公司历程添加;
	添加对应控制器、对应模型以及对应验证器进行数据操作。

添加common.js/m_common.js（公共资源目录）进行手机端与PC端之间的切换
