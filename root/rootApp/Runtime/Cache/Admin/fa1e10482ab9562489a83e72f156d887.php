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
				<li><a href="<?php echo U('Index/logout');?>"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
	            
			</ul>
			<ul class="nav navbar-nav navbar-right">
          		<li><a href="#">你好 <?php echo I('session.name');?>!</a></li>
          	</ul>
    
      
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div>
    <div style="width:300px">
		<ul class="nav nav-pills nav-stacked">
		   <li class="active"><a href="<?php echo U('Index/news');?>">News</a></li>
		   <li><a href="<?php echo U('Index/readers');?>">Readers</a></li>
		   <li><a href="<?php echo U('Index/managers');?>">Managers</a></li>
		   
		</ul>
    <br><br><button type="button" class="btn btn-warning" ><a href="<?php echo U('News/add');?>">添加新闻<a></button>
	</div>
	<br><br>
	 <table class="table table-hover" >
   <caption>新闻列表</caption>
   <thead>
      <tr>
         <th>标题</th>
         <th>时间</th>
         <th>操作</th>
      </tr>
   </thead>
   <tbody>
      <?php if(is_array($data)): foreach($data as $key=>$d): ?><tr>
             <td><?php echo ($d["title"]); ?></td>
             <td><?php echo ($d["time"]); ?></td>
             <td><a href="<?php echo U('News/del');?>&id=<?php echo ($d["id"]); ?>">删除</a></td>
          </tr><?php endforeach; endif; ?>
   </tbody>
  </table>



</body>
</html>