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
	
	//修改定界符
	'TMPL_L_DELIM'			=>		'<{',
	'TMPL_R_DELIM'			=>		'}>',

	// 显示页面Trace信息
	'SHOW_PAGE_TRACE'		 =>		true, 
	//输入过滤
	'DEFAULT_FILTER'        =>  'strip_tags,stripslashes,trim',

	//'RBAC_DB_DSN'		=> 'mysql:host=localhost;dbname=news;charset=UTF8',
	
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

	/*
	"USER_AUTH_ON" => true,                    //是否开启权限验证(必配)
    "USER_AUTH_TYPE" => 1,                     //验证方式（1、登录验证；2、实时验证）
 
    "USER_AUTH_KEY" => 'uid',                  //用户认证识别号(必配)
    "ADMIN_AUTH_KEY" => 'superadmin',          //超级管理员识别号(必配)
    "USER_AUTH_MODEL" => 'user',               //验证用户表模型 ly_user
    'USER_AUTH_GATEWAY'  =>  '/Public/login',  //用户认证失败，跳转URL
 
    'AUTH_PWD_ENCODER'=>'md5',                 //默认密码加密方式
 
    "RBAC_SUPERADMIN" => 'admin',              //超级管理员名称
 
 
    "NOT_AUTH_MODULE" => 'Index,Public',       //无需认证的控制器
    "NOT_AUTH_ACTION" => 'index',              //无需认证的方法
 
    'REQUIRE_AUTH_MODULE' =>  '',              //默认需要认证的模块
    'REQUIRE_AUTH_ACTION' =>  '',              //默认需要认证的动作
 
    'GUEST_AUTH_ON'   =>  false,               //是否开启游客授权访问
    'GUEST_AUTH_ID'   =>  0,                   //游客标记
 
    "RBAC_ROLE_TABLE" => 'ly_role',            //角色表名称(必配)
    "RBAC_USER_TABLE" => 'ly_role_user',       //用户角色中间表名称(必配)
    "RBAC_ACCESS_TABLE" => 'ly_access',        //权限表名称(必配)
    "RBAC_NODE_TABLE" => 'ly_node',            //节点表名称(必配)*/
);