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
<body>
<script>
	alert('666');
</script>
</body>
</html>