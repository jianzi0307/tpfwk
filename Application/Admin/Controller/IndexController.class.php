<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * Class IndexController
 *
 * 系统首页
 * @package Admin\Controller
 */
class IndexController extends BaseController {

    /**
     * 我的面板
     */
    public function index(){
        //print_r($this->buildHtml('a.html','./'));
        $this->display();        
    }

}