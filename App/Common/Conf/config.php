<?php
return array (
		
		// '配置项'=>'配置值'
		// 禁止模块访问
		// 'MODULE_DENY_LIST'=>array('Common','Runtime','Admin'),
		// 允许模块访问
		// 'MODULE_ALLOW_LIST'=>array('Home'),
		// 设置默认的加载模块
		// 'DEFAULT_MODULE'=>'Admin',
		// 只允许一个模块
		// 'MULTI_MODULE'=>false,
		// 设置PATHINFO的URL分隔符
		// 'URL_PATHINFO_DEPR'=>'_',
		// 修改键的名称
		// 'VAR_MODULE'=>'mm',
		// 'VAR_CONTROLLER'=>'cc',
		// 'VAR_ACTION'=>'aa',
		
		// mysql全局定义
		
		'DB_TYPE' => 'mysql',
		'DB_HOST' => 'localhost',
		'DB_USER' => 'root',
		'DB_PWD' => '123456',
		'DB_NAME' => 'lagou',
		'DB_PORT' => 3306,
		'DB_PREFIX' => 'la_',
		
		// PDO专用定义
		/*
		 * 'DB_TYPE'=>'pdo',
		 * 'DB_USER'=>'root',
		 * 'DB_PWD'=>'123456',
		 * 'DB_PREFIX'=>'la_',
		 * 'DB_DSN'=>'mysql:host=localhost;dbname=lagou;charset=UTF8',
		 */
		// 页面Trace
		'SHOW_PAGE_TRACE' => true 
);






























