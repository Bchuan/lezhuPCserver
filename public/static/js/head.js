$(document).ready(function(){
	$('.hezuo').mouseover(function(){
		$('.hezuo_hide').show();
	}).mouseout(function(){
		$('.hezuo_hide').hide();
	});
	function goright(){
		document.getElementById("donghuakuang").style.marginRight ="-260px";
		setTimeout(function(){
			goback();
		},3000);
	};
	function goback(){
		document.getElementById("donghuakuang").style.marginRight ="10px";	
		setTimeout(function(){
			goright();
		},3000);
	};
	goright();
});