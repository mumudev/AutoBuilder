<?php
	if(!file_exists('./install/installed.lock') && is_dir('./install/')){
		header('location:install/index.php');
		exit();
	}
	//开启调试模式
	define('APP_DEBUG',true);
	define('APP_NAME','Home');
	//引入入口文件
	define('APP_PATH','./Home/');
	define('Mumu_PATH','./ThinkPHP/');
	require(Mumu_PATH.'ThinkPHP.php');
?>