<?php 
namespace Admin\Model;
use Think\Model;
use Lib\Util;

/**
 * Class UseradminModel
 *
 * 系统用户表
 * @package Admin\Model
 */
class UseradminModel extends BaseModel {

	//取缓存的Key前缀
	private $_mcPrefix = 'UserAdmin::';
	//ExtMemcache对象
	private $_mc = null;

	public function __construct() {
        parent::__construct();
        //获取mc对象
        $this->_mc = $this->getMc('mcMain');
    }
	
	/**
	 * 若用户已登录 返回用户 id, 否则返回false;
	 */
	public function isLogin() {
	    $u = $this->getUserInfoFromCookie();
	    if( $u ) {
	        return $u['uid'];
	    } else {
	        return 0;
	    }
	}

	/**
	 * 用cookie的方式判断用户登录状态(只判断cookie)
	 * @version $Id$
	 * @return array 用户会话信息; false 用户未登录
	 */
	function getUserInfoFromCookie(){
	    if (isset($_COOKIE['u'])) {
	        $str = base64_decode($_COOKIE['u']);
	        return (array)json_decode($str, true);
	    }
	    else {
	        return array();
	    }
	}

    /**
     *
     * @param $uname 用户登录名可能为用户名、手机号或邮件地址。
     * @param $upasswd 密码
     * @param int $time Cookie过期时间
     * @return bool|int 成功:array,cookies; 密码错误, 用户名错误:1; 数据库查询错误2;
     */
    public function userLogin($uname, $upasswd, $time=86400000){
	    $user = $this->getUserByName($uname);
	    if($user) {
	        if (Util::genMd5Pwd($upasswd) == $user['passwd']) {
                //纪录登录IP,纪录登录积分等处理
	            //$loginip = Util::getIntIp();
	            //$this->changeUser($user['id'],array('ltime'=>date('Y-m-d H:i:s'),'loginip'=>$loginip,));

	            $_user = array();
	            $_user['uid'] = $user['id'];
	            $_user['nickname'] = $user['nickname'];
	            $_user['email'] = $user['email'];
	            $u = base64_encode(json_encode($_user));
	            $res = Util::setCookie('u', $u, $time);
	            if($res){
	                return $user['id'];
	            }
	        } else {
	            return -2;
	        }
	    } else {
	        return -1;
	    }
	    return false;
	}

    /**
     * 根据用户名获取用户ID
     *
     * @param string $uname 用户名
     * @return array|bool|mixed
     */
    public function getUserByName($uname) {
	    $uid = $this->getUidByName($uname);
	    if($uid) {
	        return $this->getUserById($uid);
	    } else {
	        return false;
	    }
	}

	/**
	 * 根据用户名获取用户ID
	 * 
	 * @param  string $uname 用户名
	 * @return int
	 */
    public function getUidByName($uname) {
		//UserAdmin::uid:username
        $cacheId = $this->_mcPrefix . "uid:{$uname}";
        if($this->_mcEnable && false != ($uid = $this->_mc->get($cacheId))) {
            ;
        } else {
            //TODO:读写分离
            $uid = $this
                ->field('id')
                ->where("uname='".$uname."'")
                ->find();
            if( !empty($uid) && $uid > 0 ) {
	            $this->_mc->set($cacheId, $uid['id'], $_expire=0, $_compress=0);
	        }
        }
        return $uid['id'] ? $uid['id'] : 0;
    }

    /**
     * 取用户基本信息
     *
     * @param $id 用户id
     * @return array|mixed 返回用户资料
     */
    public function getUserById($id) {
		//UserAdmin::userId
	    $cacheId = $this->_mcPrefix . $id;
	    if($this->_mcEnable && false !== ($v = $this->_mc->get($cacheId))) {
	        ;
	    } else {
	    	$v = $this->find($id);
	        if($v) {
                $this->_mc->set($cacheId, $v);
            } 
            /*else {
                $this->_mc->set($cacheId, '', $_expire=10, $_compress=0);
            }*/
	    }
	    if($v) {
	        //.....
	        return $v;
	    }
	    return array();
	}

	/**
     * 改变cookie auth数组中某个值
     * @version $Id$
     * @param array(
     *  $key        键名
     *  $value
     * )
     * @return array 用户会话信息;
    */
    public function setAuth($array) {
        $u = $this->getUserInfoFromCookie();
        if($u) {
            foreach ($array as $key => $value){
                $u[$key] = $value;
            }
            $ustr = Util::encrypt(json_encode($u));
            Util::setRawCookie('u', $ustr, 86400 );
            return $u;
        }
        return false;
    }

    /**
     *  更新用户信息  //适用于user  等 uid为唯一的表 。
     *  @param $id 用户id
     *  @param $row 要更新的内容  数据库字段名为索引,用户值为value
     */
    /*public function changeUser($id, $row) {
        try{
        	//$this->where('id='.$id)->save();
            $where = $dbw->quoteInto('id=?', $id);
            $dbw->update('user', $row, $where);
            if (isset($row['domain'])) {
                $ip = Util::getRealIp();
                $login = $this->isLogin();
                $this->log("changeDomain:{$id}:{$domain}:" . ($ip ? $ip : 'noip') . ($login ? $login : '匿名') . date('Y-m-d H:i:s'));
            }
            $cacheId = $this->_mcPrefix . $id;
            if( $this->_mcEnable && ($v = $this->_mc->get($cacheId)) ) {
                foreach($row as $key => $value) {
                    $v[$key] = $value;
                }
                $this->_mc->set($cacheId, $v);
            }

            //更新缓存表时间
            $count = array();
            $utime = date('Y-m-d H:i:s');
            $db = $this->getDb('dbmemo');
            $sql = "UPDATE user_count_memory SET utime = '{$utime}' WHERE id = ?";
            $db->query($sql, $id);
            $cacheId = $this->_mcPrefix . "count:{$id}";
            if($this->_mcEnable && false !== ($count = $this->_mc->get($cacheId))) {
                $count['utime'] = $utime;
                $this->_mc->set($cacheId, $count);
            }
            return true;
        }
        catch (Exception $e) {
            $this->log('file:' . $e->getFile() . ' line:' . $e->getLine()
            . $e->getMessage() . $e->getTraceAsString());
        }

        return false;
    }*/

	/**
     * 用户退出登录
     */
    public function userLogout(){
        Util::setRawCookie('u','',-1);
    }
}