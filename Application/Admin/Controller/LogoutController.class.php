<?php
namespace Admin\Controller;
use Think\Controller;
use Lib\Util;

/**
 * Class LogoutController
 *
 * 注销账号
 * @package Admin\Controller
 */
class LogoutController extends Controller {

    /**
	 *  退出登录
	 */
	public function index() {
		Util::setCookie('u','',-1);
		Util::cookieMsgRedirect('退出成功!', '/admin/login/');
	}
}