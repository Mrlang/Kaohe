<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  	<meta charest="utf-8">
   	<title>新闻中心</title>
	<link href="/root/Public/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	<script src="/root/Public/js/bootstrap.min.js"></script>
	<style>
    body {
    padding-top: 50px;
    padding-left: 0px;
    }
    </style>
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

	            <li><a href="<?php echo U('Index/logout');?>"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
	             <li><a href="<?php echo U('Admin/Login/index');?>"><span class="glyphicon glyphicon-user"> Manager</span></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
          		<li><a href="#">你好 <?php echo I('session.name');?>!</a></li>
          	</ul>
    
      
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div>
    
	<div class="col-md-9 blog-container-list">
	<!--文章的遍历-->
	<?php if(is_array($data)): foreach($data as $key=>$d): ?><div class="page-header">
			<h4><a href="/root/index.php/Home/Index/content/id/<?php echo ($d["id"]); ?>">标题：<?php echo ($d["title"]); ?></a></h4>
		</div>
		<div class="panel">
			<div class="panel-body">内容：<pre><h4><?php echo ($d["content"]); ?></h4></pre></div>
			<div class="panel-footer">
				创建于：<?php echo ($d["time"]); ?>		
			</div>
		</div>	
		<br><?php endforeach; endif; ?>
	<!--分页-->
	<?php echo ($page); ?>
	</div>
    <!-- jQuery (Bootstrap 插件需要引入) http://apps.bdimg.com/libs/jquery/2.1.1/-->
    <script src="/root/Public/jquery/jquery.min.js"></script>

</body>
</html>