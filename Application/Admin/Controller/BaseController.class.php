<?php 
namespace Admin\Controller;
use Think\Controller;
use Lib\ExtAuth;

/**
 * Class BaseController
 *
 * Controller基类
 * @package Admin\Controller
 */
class BaseController extends Controller {

	protected $_loginUser = array();
	protected $_userId = 0;

    /**
     * 登录验证和权限验证
     */
    public function _initialize() {

        vendor('Raven.Autoloader');
        \Raven_Autoloader::register();
        $client = new \Raven_Client('http://db71069e53ca465c9817d56f6cb2d0ad:f938c54726914c358596f857d8399acf@sentry.example.com/2');
        $error_handler = new \Raven_ErrorHandler($client);
        // Register error handler callbacks
        set_error_handler(array($error_handler, 'handleError'));
        set_exception_handler(array($error_handler, 'handleException'));

		//检查用户是否登录
		$user = D('Useradmin');
		$this->_userId = $user->isLogin();
		if( !$this->_userId ) {
			exit($this->error('你还没有登录!','/admin/login'));
		}
		if( !($_loginUser = $user->getUserById($this->_userId)) ) {
		    exit($this->error('用户信息有误!','/admin/login/'));
		}

		//检查用户权限
		$auth = new ExtAuth();
		if( !in_array($this->_userId,C('ADMINISTRATOR')) ) {
	    	if(!$auth->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME,$this->_userId)){
	    		exit($this->show('没有权限访问,请联系管理员!'));
	    	}
	    }

       	//用户名首字母大写，用于显示
		$this->assign('uname',ucwords($_loginUser['uname']));
	}

	/**
	 * 生成默认类文件
	 * @param string $module 模块名
	 */
	public function createDefaultClassFile($module) {
		$this->compile($module,'Base','base_controller',true);
		$this->compile($module,'Index','controller');
	}

	/**
	 * 编译模板生产对应类
	 * 
	 * @param  string $module  模块名
	 * @param  string $clsName 类名
	 * @param  string $tpl     模板名
	 * @param  bool $isBase	   是否基类
	 * @param  string $type    类型(controller|model)
	 */
	public function compile($module,$clsName,$tpl,$isBase=false,$type='controller') {
		$module = ucwords($module);
		$clsName = ucwords($clsName);
		$type = ucwords($type);

		$this->assign('__G_MODULE__',$module);
        $this->assign('__G_TYPE__',$type);
        $this->assign('__G_FILE__',$clsName.$type.".class.php");
        $this->assign('__G_DATE__',date('Y-m-d'));
        $this->assign('__G_TIME__',date('H:i:s'));
        $this->assign('__G_CLASS__',$clsName);
        $this->assign('__G_BASECLASS__',$isBase ? $type : 'Base'.$type);
        file_put_contents(APP_PATH.'/'.$module.'/'.$type.'/'.$clsName.$type.'.class.php',"<?php".PHP_EOL.$this->fetch(MODULE_PATH.'/Templates/'.$tpl.'.tpl'));
	}
}