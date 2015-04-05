<?php
// +----------------------------------------------------------------------
//	公共配置
// +----------------------------------------------------------------------
// 
return array(

    'URL_CASE_INSENSITIVE' => true,

	//密码干扰码，跟用户密码一起md5后存入库
	'PASSWORD_MASK'	   =>	"*&^^|%s|&$",

	//是否允许多模块
	'MULTI_MODULE'          =>  true,

	// 禁止访问的模块列表
	'MODULE_DENY_LIST'      =>  array('Common','Runtime'), 

	//公共数据库配置
	
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  '127.0.0.1', // 服务器地址
	'DB_NAME'               =>  'app',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  '111',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_PREFIX'             =>  'app_',    // 数据库表前缀
	'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查 3.2.3版本废弃
	'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
	'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
	
	'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
	'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
	'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
	'DB_SLAVE_NO'           =>  0, // 指定从服务器序号


	//'DB_BIND_PARAM'         =>  true, // 数据库写入数据自动参数绑定
	'DB_DEBUG'              =>  true,  // 数据库调试模式 3.2.3新增 
	'DB_LITE'               =>  false,  // 数据库Lite模式 3.2.3新增 
		
	'AUTOLOAD_NAMESPACE'	=> array(
			'Lib' => APP_PATH.'Common/Lib'
		),

	//Memcache 集群
	'MEMCACHE_SERVERS' => array(
			//mcMain服务器组
			'mcMain' => array(
					array('host' => '127.0.0.1', 'port' => '20000', 'weight' => 2),
					array('host' => '127.0.0.1', 'port' => '20001', 'weight' => 2),
					array('host' => '127.0.0.1', 'port' => '20002', 'weight' => 2)
				),
			//其他服务器组
			//'other' => array(
			//		array('host' => 'xxx.xxx.xxx.xxx', 'port' => 'xxx', 'weight' => 1),
			//		array('host' => 'xxx.xxx.xxx.xxx', 'port' => 'xxx', 'weight' => 2),
			//		array('host' => 'xxx.xxx.xxx.xxx', 'port' => 'xxx', 'weight' => 3),
			//	),
		),

);