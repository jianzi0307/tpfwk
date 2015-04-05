<?php

/**
 * 指定 mcString 得到对应的 ExtMemcache 对象, 极其常用
 * 
 * @param string $mcString 服务器组名
 * @return object of ExtMemcache
 */
function getMc( $mcString = 'mcMain' ) {
	static $mcPool = array();
	if( isset($mcPool[$mcString]) ) {
		return $mcPool[$mcString];
	}
	$serversConf = C('MEMCACHE_SERVERS');
	return $mcPool[$mcString] = new Lib\ExtMemcache($serversConf[$mcString]);
}