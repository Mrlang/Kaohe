<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  	<meta charest="utf-8">
   	<title>新闻中心</title>
	   <link href="/root/Public/css/bootstrap.min.css" rel="stylesheet">
	   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	   <script src="/root/Public/js/bootstrap.min.js"></script>
</head>
<body>
	 <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo U('Index/index');?>">News Center</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo U('Index/index');?>"><span class="glyphicon glyphicon-home"> Home</span></a></li>
            <li><a href="<?php echo U('Login/index');?>"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
            <li><a href="#support"><span class="glyphicon glyphicon-log-in"> Support</span></a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div>
    <!-- jQuery (Bootstrap 插件需要引入) -->
    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>

</body>
</html>