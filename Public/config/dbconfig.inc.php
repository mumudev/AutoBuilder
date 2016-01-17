<?php
/*数据库配置信息*/
return array(
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'blog',
	'DB_USER' => 'blog',
	'DB_PWD' => 'blog',
	'DB_PORT'  => '3306',
	'DB_PREFIX' => 'blog_',
	'RBAC_ROLE_TABLE' => 'blog_role',
	'RBAC_USER_TABLE'=>'blog_role_user',
	'RBAC_ACCESS_TABLE'=>'blog_access',
	'RBAC_NODE_TABLE'=>'blog_node',
);
?>