$(document).ready(function(){
	$('.bc_navlistbar .hezuo').mouseover(function(){
		$('.bc_navlistbar .hezuo_hide').show();
	}).mouseout(function(){
		$('.bc_navlistbar .hezuo_hide').hide();
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