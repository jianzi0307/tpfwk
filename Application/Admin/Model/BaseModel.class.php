<?php
namespace Admin\Model;
use Think\Model;
use Lib\ExtMemcache;

/**
 * Class BaseModel
 *
 * 模型基类
 * @package Admin\Model
 */
class BaseModel extends Model {

	protected $_mcEnable = true;            //是否开启memcache缓存
	protected static $mcPool = array();     //memcache对象池
    protected static $objPool = array();    //obj对象池

    public function _initialize() {
        //为便于调试, 提供一种便利的禁用 mc 的方式
        if (isset($_GET['mcDisable']) || isset($_POST['mcDisable'])) {
            $this->_mcEnable = false;
        }
    }

    /**
     * 指定 clsName 得到对应的对象实例， 
     * ThinkPHP对应的M,D等方法都做了对象池缓存，此函数用于创建自定义类对象
     * 极为常用
     * @param string $clsName
     * @return object of $clsName
     */
    public function getObj($clsName) {
        if(isset(self::$objPool[$clsName])) {
            return self::$objPool[$clsName];
        }
        return self::$objPool[$clsName] = new $clsName();
    }

    /**
	 * 指定 mcString 得到对应的 ExtMemcache 对象
	 * 极其常用
	 * 
	 * @param string $mcString 服务器组名
	 * @return object of ExtMemcache
	 */
	function getMc( $mcString = 'mcMain' ) {
		$this->mcPool = array();
		if( isset($this->mcPool[$mcString]) ) {
			return $this->mcPool[$mcString];
		}
		$serversConf = C('MEMCACHE_SERVERS');
		return $this->mcPool[$mcString] = new ExtMemcache($serversConf[$mcString]);
	}

	/**
	 * 开启Memcache
	 */
	public function setMcEnable() {
		$this->_mcEnable = true;
	}

	/**
	 * 关闭Memcache
	 */
	public function setMcDisable() {
		$this->_mcEnable = false;
	}

}