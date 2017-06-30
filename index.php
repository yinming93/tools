<?php
//引入js类文件
require_once "jssdk.php";
$jssdk = new JSSDK( APPID, APPSECRET );
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" />
<script src="jquery-1.8.2.min.js"></script>
<meta http-equiv="Cache-Control" content="max-age=0" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">	
<link rel="stylesheet" href="dh.css">
	<title>测一测，你是否有当老板的潜质！</title>
</head>
<style>
body{
	padding:0;
	margin:0;
}
.tt{
	width: 100%;
	height: 100%;
	background: white;
	position: absolute;
	/*display: none;*/
}
.tt img{
	width: 100%;
	height: 100%;
	position: absolute;
	top:0;
	left:0;
}
label{
	width: 20%;
	height: 10%;
	background: transparent;
	opacity: 1;
	position: absolute;
}
label>input{
	margin-top: 76%;
}
.demo{
	width: 8%;
	height: 5%;
	position: absolute;
	top: 29.5%;
	right: 8%;
	line-height: 28px;
	text-align: center;
	font-size: 14px;
	color: red;
}
.shan{
-webkit-animation:flash 2s infinite ease both;
-moz-animation:flash 2s infinite ease both;}
@-webkit-keyframes flash{
0%,50%,100%{opacity: 1;}
25%,75%{opacity: 0;}
}
@-moz-keyframes flash{
0%,50%,100%{opacity: 1;}
25%,75%{opacity: 0;}
}
</style>
<script>	
		//图片预加载
		function loadImages(sources, callback){
			var count = 0,
				images ={},
				imgNum = 0;
			for(src in sources){
				imgNum++;
			}
			for(src in sources){
				images[src] = new Image();
				images[src].onload = function(){
					if(++count >= imgNum){
						callback(images);
					}
				}
				images[src].src = sources[src];
			}
		}
		loadImages(['img/1.jpg','img/2.jpg','img/3.jpg','img/0.jpg',
			'img/4-1.jpg','img/4-2.jpg','img/4-3.jpg','img/4-4.jpg','img/4-5.jpg','img/5.jpg','img/20.jpg','img/40.jpg','img/60.jpg','img/80.jpg','img/100.jpg',
					],function(){
		      // $('.spinner').remove();
		      // $('#gui').hide();
		      // alert('预加载完成');
		      // document.getElementById('gui').style.display='none';
		})
</script>
<script>
		function sy(){
			var play= document.getElementById('audio');		
			play.play();
			loadImages();
		}
</script>
<body onload="sy()">
<div class="tt" id="shou" style="z-index:199;display:block;">
	<img src="img/0.jpg" alt="">
	<img class="shan" src="shou.png" style="width:12%;height:40px;position:absolute;top:80%;left:44%;">
	<label style="top:0%;left:0%;width:100%;height:100%;opacity:0;background:red;" onclick="xs()"><input type="radio" name="o0" q='0'></label>
</div>
<div class="tt" style="z-index:189;" id="y2">
	<img src="img/1.jpg" alt="">
	<label style="top:46%;left:28%;" onclick="f();"><input type="radio" name="o1" q='1'></label>
	<label style="top:46%;left:51.5%;" onclick="ff();"><input type="radio" name="o1" q='1'></label>
	<label style="top:60%;left:12%;" onclick="fff();"><input type="radio" name="o1" q='1'></label>
	<label style="top:60%;left:38%;" onclick="ffff();"><input type="radio" name="o1" q='1'></label>
	<label style="top:60%;left:62%;" onclick="fffff();"><input type="radio" name="o1" q='1'></label>
</div>
<div class="tt" style="z-index:179;" id="a">
	<img src="img/2.jpg" alt="">
	<label style="top:40%;left:15%;" onclick="a1();"><input type="radio" name="o2" q='0'></label>
	<label style="top:40%;left:49%;" onclick="a2();"><input type="radio" name="o2" q='0'></label>
	<label style="top:59.8%;left:17%;" onclick="a3();"><input type="radio" name="o2" q='1'></label>
	<label style="top:59.8%;left:51%;" onclick="a1();"><input type="radio" name="o2" q='0'></label>
</div>
<div class="tt" style="z-index:169;" id="b">
	<img src="img/3.jpg" alt="">
	<label style="top:40%;left:22%;" onclick="b1();"><input type="radio" name="o3" q='0'></label>
	<label style="top:40%;left:56%;" onclick="b1();"><input type="radio" name="o3" q='1'></label>
	<label style="top:59.8%;left:21%;" onclick="b1();"><input type="radio" name="o3" q='0'></label>
	<label style="top:59.8%;left:55%;" onclick="b1();"><input type="radio" name="o3" q='0'></label>
</div>
<div class="tt" style="z-index:159;" id="o">
	<img src="img/4-1.jpg" alt="">
	<label style="top:40%;left:21%;" onclick="c1();"><input type="radio" name="o4" q='0'></label>
	<label style="top:40%;left:55%;" onclick="c1();"><input type="radio" name="o4" q='0'></label>
	<label style="top:59.8%;left:20%;" onclick="c1();"><input type="radio" name="o4" q='0'></label>
	<label style="top:59.8%;left:54%;" onclick="c1();"><input type="radio" name="o4" q='1'></label>
</div>
<div class="tt" style="z-index:149;" id="oo">
	<img src="img/4-2.jpg" alt="">
	<label style="top:40%;left:21%;" onclick="d1();"><input type="radio" name="o5" q='0'></label>
	<label style="top:40%;left:55%;" onclick="d1();"><input type="radio" name="o5" q='0'></label>
	<label style="top:59.8%;left:20%;" onclick="d1();"><input type="radio" name="o5" q='1'></label>
	<label style="top:59.8%;left:54%;" onclick="d1();"><input type="radio" name="o5" q='0'></label>
</div>
<div class="tt" style="z-index:139;" id="ooo">
	<img src="img/4-3.jpg" alt="">
	<label style="top:40%;left:21%;" onclick="e1();"><input type="radio" name="o6" q='0'></label>
	<label style="top:40%;left:55%;" onclick="e1();"><input type="radio" name="o6" q='1'></label>
	<label style="top:59.8%;left:20%;" onclick="e1();"><input type="radio" name="o6" q='0'></label>
	<label style="top:59.8%;left:54%;" onclick="e1();"><input type="radio" name="o6" q='0'></label>
</div>
<div class="tt" style="z-index:129;" id="oooo">
	<img src="img/4-4.jpg" alt="">
	<label style="top:40%;left:21%;" onclick="g1();"><input type="radio" name="o7" q='0'></label>
	<label style="top:40%;left:55%;" onclick="g1();"><input type="radio" name="o7" q='0'></label>
	<label style="top:59.8%;left:20%;" onclick="g1();"><input type="radio" name="o7" q='1'></label>
	<label style="top:59.8%;left:54%;" onclick="g1();"><input type="radio" name="o7" q='0'></label>
</div>
<div class="tt" style="z-index:119;" id="ooooo">
<div class="demo" style="z-index: 119;top:7%;"></div>
	<img src="img/4-5.jpg" alt="">
	<label style="top:40%;left:21%;" onclick="h1();"><input type="radio" name="o8" q='0'></label>
	<label style="top:40%;left:55%;" onclick="h1();"><input type="radio" name="o8" q='0'></label>
	<label style="top:59.8%;left:20%;" onclick="h1();"><input type="radio" name="o8" q='0'></label>
	<label style="top:59.8%;left:54%;" onclick="h1();"><input type="radio" name="o8" q='1'></label>
</div>
<div class="tt" style="z-index:99;" id="xx">
<div class="demo" style="z-index: 99;top:7%;"></div>
	<img src="img/5.jpg" alt="">
	<label style="top:45%;left:21%;" onclick="x1();"><input type="radio" name="o10" q='1'></label>
	<label style="top:45%;left:56%;" onclick="x1();"><input type="radio" name="o10" q='0'></label>
	<label style="top:64.5%;left:21%;" onclick="x1();"><input type="radio" name="o10" q='0'></label>
	<label style="top:64.5%;left:54%;" onclick="x1();"><input type="radio" name="o10" q='0'></label>
</div>
<div class="tt" style="z-index:49;" id="cnm">
	<img id="fenshu" src="img/20.jpg">
	<a href="index.php"><input type="button" style="width:50%;height:40px;background:#E7324B;position:absolute;top:85%;left:25%;line-height:40px;border:0;border-radius:5px;color:white;" value="再测一次"></a>
</div>
<audio id='audio' src="sr.mp3" loop autoplay="autoplay"></audio>
</body>
</html>
<script>
	 setTimeout(function(){
	     $(window).scrollTop(1);
	 },0);
	  document.getElementById('audio').play();
	  document.addEventListener("WeixinJSBridgeReady", function () {
			WeixinJSBridge.invoke('getNetworkType', {}, function (e) {
	            document.getElementById('audio').play();
			});
	  }, false);
	</script>
<script>
var ccc = 0;
var cc = 0;
var cd = 0;
	function xs(){
		$('#shou').fadeOut(1000);
	}
	function a1(){
		$('#a').fadeOut(1000);
	}
	function a2(){
		$('#a').fadeOut(1000);
		ccc=8;
	}
	function a3(){
		$('#a').fadeOut(1000);
		cd=8;
	}
	function b1(){
		$('#b').fadeOut(1000);
	}
	function c1(){
		$('#o').fadeOut(1000);
	}
	function d1(){
		$('#oo').fadeOut(1000);
	}
	function e1(){
		$('#ooo').fadeOut(1000);
	}
	function g1(){
		$('#oooo').fadeOut(1000);
	}
	function h1(){
		$('#ooooo').fadeOut(1000);
	}
	function x1(){
		$('#xx').fadeOut(1000);
	}
	function f () {
		$('#y2').fadeOut();
		$("#oo").fadeOut();
		$("#ooo").fadeOut();
		$("#oooo").fadeOut();
		$("#ooooo").fadeOut();
	}
	function ff () {
		$('#y2').fadeOut();
		$("#o").fadeOut();
		$("#ooo").fadeOut();
		$("#oooo").fadeOut();
		$("#ooooo").fadeOut();
		cc=8;
	}
	function fff () {
		$('#y2').fadeOut();
		$("#o").fadeOut();
		$("#oo").fadeOut();
		$("#oooo").fadeOut();
		$("#ooooo").fadeOut();
	}
	function ffff () {
		$('#y2').fadeOut();
		$("#o").fadeOut();
		$("#oo").fadeOut();
		$("#ooo").fadeOut();
		$("#ooooo").fadeOut();
	}
	function fffff () {
		$('#y2').fadeOut();
		$("#o").fadeOut();
		$("#oo").fadeOut();
		$("#ooo").fadeOut();
		$("#oooo").fadeOut();
	}
</script>
<script>
	var c = 0;
	var i = 0;
	$("input:radio").on('click',function(){
		 if ($(this).attr("q")==1){
	        c++;
	      }
	      i++;
		// $(this).parent().parent().fadeOut().next('.tt').fadeIn();
		if (i==6){
			if(cc==8){
				// alert('奶茶哦');
				if(ccc==8){
					// alert('奶茶选对咯');
					c=c+1;
				}else if(cd==8){
					// alert('奶茶不是c');
					c=c-1;
				}
			}
			// alert('你一共答对了'+c+'题');
			if(c==1){
				$("#fenshu").attr("src","img/20.jpg");
			}else if(c==2){
				$("#fenshu").attr("src","img/40.jpg");
			}else if(c==3){
				$("#fenshu").attr("src","img/60.jpg");
			}else if(c==4){
				$("#fenshu").attr("src","img/80.jpg");
			}else if(c==5){
				$("#fenshu").attr("src","img/100.jpg");}
			var percent = c/5;
			var per = parseInt(percent*10);
		}
		 // wx.ready(function () {
			// var shareinfo={
			//  	 title: '我当老板的潜质超过了'+per+'0%的人，快来看看你的吧',
			//       desc: '测一测，你是否有当老板的潜质！',
			//       link: 'http://szxytang.com/yin/za/lhwulin',
			//       imgUrl: 'http://szxytang.com/yin/za/lhwulin/share.jpg'}
			//       wx.onMenuShareTimeline(shareinfo);
			//  wx.onMenuShareAppMessage(shareinfo);
			//   });
	})
</script>
<!-- 引入脚本 -->
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>	
<script type="text/javascript">
wx.config({
	    debug: false,
	    appId: '<?php echo $signPackage["appId"];?>',
	    timestamp: '<?php echo $signPackage["timestamp"];?>',
	    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
	    signature: '<?php echo $signPackage["signature"];?>',
	    jsApiList: [
	"onMenuShareTimeline","onMenuShareAppMessage"
	    ]
	  });
	 wx.ready(function () {
	var shareinfo={
	 	 title: '据说因为这个测试，99%的高分考生转行当老板了',
	      desc: '测一测，你是否有当老板的潜质！',
	      link: 'http://szxytang.com/yin/za/lhwulin',
	      imgUrl: 'http://szxytang.com/yin/za/lhwulin/share.jpg'}
	      wx.onMenuShareTimeline(shareinfo);
	 wx.onMenuShareAppMessage(shareinfo);
	  });
</script>
<!--百度统计代码-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?d949d76d44a0717b8fa4a2dd7cbe2461";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>