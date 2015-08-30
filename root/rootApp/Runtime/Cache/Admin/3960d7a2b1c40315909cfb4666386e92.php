<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>登录</title>

<link href="/root/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/root/Public/css/bootstrap.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

</head>
<body>
<div class="login">
	<h2>Login Form</h2>
	<div class="login-top">
		<h1>内部管理员</h1>
		<form method="post" action="<?php echo U('Login/doLogin');?>" name="myForm">
			<input name="username" type="text"  placeholder="Enter username">
			<input name="password" type="password" placeholder="Enter password">
			<input type="text" name="verify" placeholder="Verify">
	  		<img src="<?php echo U('Login/verify');?>" onclick="this.src=this.src+'&'+Math.random()" >
	    <div class="forgot">
	    	<input type="submit"  value="登录">
	    </div>
	      </form>

	</div>
	<div class="login-bottom">
	</div>
</div>	




</body>
</html>