<?php
$str = 'a';
if (file_put_contents("test.txt",$str,FILE_APPEND)){
	
}else{
	
};
 file_get_contents('test.txt');
 stripslashes(file_get_contents('test.txt'));
$fw = strlen(file_get_contents('test.txt'));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <title>尹明数据库下载</title>
<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<link href="css/zzsc.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<style>
	.formdiv{
		width: 250px;
		height: 200px;
		/*background: red;*/
		margin-top: 100px;
		margin-left: auto;
		margin-right: auto;

	}
	.sr{
		border-radius: 8px;
		height: 30px;
		width: 150px;
		border: 0;
	}
	.xz{
		background: white;
		border: 1;
		color: #666;
		width: 80px;
		height: 28px;
		border-radius: 5px;
	}
	.tongzhi{
		width: 350px;
		height: 500px;
		background: white;
		position: absolute;
		top: 100px;
		left: 50px;
		box-shadow: 10px 10px 5px #888888;

	}
	#tu{
		width: 100%;
	}
	#km{
		/*position: absolute;
		top: 27.5%;
		left: 42%*/
	}
	#bm{
		/*position: absolute;
		top: 36%;
		left: 42%*/
	}
</style>
<body>
<br><br>
<center style="color:#666666;font-size:24px;font-weight:bold;">尹明数据库下载工具</center>
<form class="formdiv" action="add.php" method="post" onsubmit ="return check();" >
	<tr>
		<td><p id="km">数据库名：</p><input class="sr" type="text" name="kname" placeholder="请输入数据库名称"><br><br></td>
		<td><p id="bm">数据表名：</p><input class="sr" type="text" name="bname" placeholder="请输入数据表名称"><br><br></td>
		<td><center><input class="xz" name="sub" type="submit" value="下&nbsp;载"></center></td>
	</tr>
</form>
<p style="position: absolute;left:90%;top:3%;color:blue;">浏览：<?php echo $fw;?></p>
<img style="position: absolute;left:70%;top:70%;width:150px;" src="images/1.gif" alt="" />
<img style="position: absolute;left:10%;top:5%;width:150px;z-index:999;" src="images/2.gif" alt="" />
<!-- <img style="position: absolute;left:55%;top:45%;width:150px;" src="images/3.gif" alt="" /> -->
<img style="position: absolute;left:45%;top:0%;width:100px;" src="images/4.gif" alt="" />
<!-- 代码 开始 -->
<audio id="bgMusic" src="zzsc.mp3" autoplay="autoplay" loop="loop"></audio>
<div id="service">
	<!-- <a href="#" class="srvLog" target="_blank">申请试用</a> -->
	<a class="srvCns" href="tencent://message/?uin=934162347&Site=企业网站&Menu=yes">在线咨询</a>
	<!-- <a href="#" class="srvDj" target="_blank">申请合作</a> -->
	<a class="mscBtn" id="audioBtn" title="开关音效">开关音效</a>
	<a class="goTop" id="goTop" title="返回顶部" style="display:none">返回顶部</a>
</div>
<script type="text/javascript" src="js/service.js">	</script>
<!-- 代码 结束 -->

<!-- 通知开始 -->
<div class="tongzhi">
<br />
<center style="color:#666;font-size:20px;font-weight:bold;">通知</center>
<br />
<p style="color:#666666;font-size:14px;padding:5px;">
	如果您觉得我的小工具帮助了您，或者您希望让我有动力继续改进，就解囊相助用支付宝或者微信<a style="text-decoration:none;color:red;font-weight:bold;">扫一扫</a>下面的二维码，给我动力吧。如果您很大方就多扫几次吧！
</p>
	<img id="tu" src="images/4.jpg" alt="尹明数据库下载" /><br /><br /><br />
	<center style="color:#666;font-size:14px;font-weight:bold;">信玉堂技术支持</center>
</div>
<!-- 通知结束 -->
</body>
</html>
