<?php
return array(
	//'配置项'=>'配置值'
	//PDO专用定义
	'DB_TYPE'				=>		'pdo',
	'DB_USER'				=>		'root',
	'DB_PWD'				=>		'',
	'DB_PREFIX'				=>		'news_',
	'DB_DSN'				=>		'mysql:host=localhost;dbname=news;charset=UTF8',

	'MODULE_ALLOW_LIST'   	=>   	array('Home','Admin'),
	'DEFAULT_MODULE'     	=>   	'Home',
	
	'URL_MODEL'=>  '0',


	//修改定界符
	'TMPL_L_DELIM'			=>		'<{',
	'TMPL_R_DELIM'			=>		'}>',

	// 显示页面Trace信息
	'SHOW_PAGE_TRACE'		 =>		true, 
	//输入过滤
	'DEFAULT_FILTER'        =>  'strip_tags,stripslashes,trim',
	
	'USER_AUTH_ON'      => '1',
	'USER_AUTH_TYPE'    => '1',//2为即时验证模式，别的数字为登陆验证
	'RBAC_ROLE_TABLE'   => 'news_role',
	'RBAC_USER_TABLE'   => 'news_role_user',
	'RBAC_ACCESS_TABLE' => 'news_access',
	'RBAC_NODE_TABLE'   => 'news_node',
	 'GUEST_AUTH_ON'   =>  false,               //是否开启游客授权访问
    'GUEST_AUTH_ID'   =>  0,                   //游客标记
    'REQUIRE_AUTH_MODULE' =>  '',              //默认需要认证的模块
    'REQUIRE_AUTH_ACTION' =>  '',              //默认需要认证的动作
    "NOT_AUTH_MODULE" => 'Index,Public',       //无需认证的控制器
    "NOT_AUTH_ACTION" => 'index',              //无需认证的方法
    "RBAC_SUPERADMIN" => 'admin',              //超级管理员名称
    "USER_AUTH_MODEL" => 'user',               //验证用户表模型 ly_user
    "USER_AUTH_KEY" => 'id',              //用户认证识别号(必配)
    "ADMIN_AUTH_KEY" => 'admin',          //超级管理员识别号(必配)


);