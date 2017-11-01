//  if(navigator.platform.indexOf('Win32')!=-1){ 

// //pc
// 	// console.log(navigator.platform)
// 	console.log('pc')
//    window.location.href="http://localhost/php/project/lezhu/public/index/index/index.html";

//  }else{ 

// //shouji
// 	// window.location.href="http://localhost/php/project/lezhu/public/index/index/index.html";
//     console.log('wap')
//     console.log(navigator.userAgent.toLowerCase())

//   } 

function browserRedirect() { 

	var sUserAgent= navigator.userAgent.toLowerCase(); 

	var bIsIpad= sUserAgent.match(/ipad/i) == "ipad"; 

	var bIsIphoneOs= sUserAgent.match(/iphone os/i) == "iphone os"; 

	var bIsMidp= sUserAgent.match(/midp/i) == "midp"; 

	var bIsUc7= sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4"; 

	var bIsUc= sUserAgent.match(/ucweb/i) == "ucweb"; 

	var bIsAndroid= sUserAgent.match(/android/i) == "android"; 

	var bIsCE= sUserAgent.match(/windows ce/i) == "windows ce"; 

	var bIsWM= sUserAgent.match(/windows mobile/i) == "windows mobile"; 

	if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) { 
		console.log('wap')
		

	} else { 
		console.log('pc')
		window.location.href= 'http://localhost/php/project/lezhu/public/index/index/index.html'; 

	} 

} 
browserRedirect()