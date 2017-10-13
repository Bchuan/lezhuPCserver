
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



