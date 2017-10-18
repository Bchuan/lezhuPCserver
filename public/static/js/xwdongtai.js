$(document).ready(function(){

	function mousexy(lei){	//新闻详情页下面的论坛标题的鼠标响应操作，移到了那儿标题变绿，参数是论坛每一板块的类名
		lei = "." + lei;
		$(lei).mouseover(function(){
			zilei = lei + " h4";
			$(zilei).attr("style","color:green;");
		}).mouseout(function(){
			$(zilei).attr("style","color:black;");
		})
	}
	mousexy('xq_r1');
	mousexy('xq_r2');
	mousexy('xq_r3');
	mousexy('xq_r4');
	mousexy('xq_r5');
	mousexy('xq_r6');
	mousexy('xq_r7');
	mousexy('xq_r8');
	mousexy('xq_r9');
	mousexy('xq_r10');

})