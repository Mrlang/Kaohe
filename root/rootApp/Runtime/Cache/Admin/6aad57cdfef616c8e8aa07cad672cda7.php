<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>用户注册</title>

<link href="/root/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->

<!--Google Fonts-->
</head>
<body>
<div class="login">
  <h2>Add Form</h2>
  <div class="login-top">
    <h1>添加新闻</h1>
    <form method="post" action="<?php echo U('News/doadd');?>">
      <input name="title" type="text"  placeholder="Enter title">
      <input name="content" type="text" placeholder="Enter content">
      <div class="forgot">
        <input type="submit" value="提交" >
      </div>
      </form>
  </div>
  <div class="login-bottom">
    <h3>您正在 &nbsp;<a href="#">添加新闻</a>&nbsp 中...</h3>
  </div>
</div>  




</body>
</html>