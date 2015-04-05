<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 15/4/1
 * Time: 下午9:53
 */
namespace Admin\Controller;

/**
 * Class SysmanageController
 *
 * 系统管理
 * @package Admin\Controller
 */
class SysmanageController extends BaseController {

    /**
     * 系统用户组管理
     */
    public function userGroup() {
        $this->display();
    }

    /**
     * 系统用户管理
     */
    public function users() {
        $this->display();
    }

    /**
     * 系统权限管理
     */
    public function privileges() {
        $this->display();
    }

    /**
     * 系统日志
     */
    public function logs() {
        $this->display();
    }
}