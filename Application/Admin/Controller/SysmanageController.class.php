<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 15/4/1
 * Time: 下午9:53
 */
namespace Admin\Controller;
use Lib\Util;

/**
 * Class SysmanageController
 *
 * 系统管理
 * @package Admin\Controller
 */
class SysmanageController extends BaseController {

    //成功
    const __ok__ = 0;
    //添加组失败
    const __error__1 = 20001;
    //删除组失败
    const __error__2 = 20002;

    protected $db = null;

    public function _initialize() {
        parent::_initialize();
        $this->db = M();
    }

    /**
     * 系统用户组管理
     */
    public function userGroup() {
        $groupList =  $this->db->table('sys_auth_group')->select();
        $this->assign('groupList',$groupList);
        $this->display();
    }

    /**
     * 系统用户管理
     */
    public function users() {
        $userList = $this->db->table('sys_auth_group_access')
            ->join('app_useradmin on sys_auth_group_access.uid = app_useradmin.id')
            ->select();
        $this->assign('userList',$userList);
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
        $logs = $this->db->table('sys_logs')->select();
        $this->assign('logs',$logs);
        $this->display();
    }

    /**
     * 添加组
     */
    public function addUserGroup() {
        $groupName = Util::getSafeText(trim(I('param.groupName')));
        $groupStatus = Util::getSafeText(I('param.groupStatus'));
        $groupDescription = Util::getSafeText(trim(I('param.groupDescription')));

        $sysAuthGroup = array(
            'title'=>$groupName,
            'status'=>$groupStatus,
            'description'=>$groupDescription
        );
        $res = $this->db->table('sys_auth_group')->data($sysAuthGroup)->add();
        if( $res ) {
            exit(Util::response(self::__ok__,"添加组成功!"));
        } else {
            exit(Util::response(self::__error__1,"添加组失败!"));
        }
    }

    /**
     * 删除组
     */
    public function removeUserGroup() {
        $groupId = Util::getSafeText(I('param.groupId'));
        $res = $this->db->table('sys_auth_group')->where('id='.$groupId)->delete();
        if( $res ) {
            exit(Util::response(self::__ok__,"删除组成功!"));
        } else {
            exit(Util::response(self::__error__2,"删除组失败!"));
        }
    }
}
