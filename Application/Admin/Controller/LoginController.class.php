<?php

namespace Admin\Controller;
use Think\Controller;
use Lib\Util;

/**
 * Class LoginController
 *
 * 登录控制器
 * @package Admin\Controller
 */
class LoginController extends Controller {
	//账号不存在
	const __error__1 = 10001;
	//用户名或密码错误
	const __error__2 = 10002;
	//成功
	const __ok__ = 0;
	//其他未知错误
	const __unkown__ = -1;

    /**
     * 登录界面
     */
    public function index() {
        //判断是否已经登录，已登录跳转到管理首页
		$user = D('Useradmin');
		if( $user->isLogin() ) {
			exit($this->success('已经登录!','/admin'));
		}
		$this->display();
	}

	/**
	 * 登录验证
	 */
	public function loginAuth() {
		$uname = I('post.username');
		$upasswd = I('post.password');
		if($uname && $upasswd) {
			$user = D('Useradmin');
			$authRes = $user->userLogin($uname,$upasswd);
			if( $authRes > 0 ) {
				exit(Util::response(self::__ok__));
			}
			if( $authRes == -1 ) {
				exit(Util::response(self::__error__1,"账号不存在"));
			}
			if( $authRes == -2 ){
				exit(Util::response(self::__error__2,"用户名或密码错误"));
			}
			exit(Util::response(self::__unkown__,"未知错误"));
		}
	}

}