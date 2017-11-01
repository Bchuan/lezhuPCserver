$(document).ready(function(){
	$('.m_hezuo').click(function(){
		var i = $('.m_hezuo').attr("value");
		if(i == 0){
			$('.m_hezuo_hide').slideDown();
			i = 1;
		}else{
			$('.m_hezuo_hide').slideUp();
			i = 0;
		}
		$('.m_hezuo').attr("value",i);
	});

	var arr=window.location.href.split('/');
	console.log(arr)
	var url ='.'+arr[8];
	$(url).addClass("active");
	console.log($(url))
});
