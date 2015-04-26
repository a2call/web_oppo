<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

	/**
	 * 首页
	 */
    public function index(){
        $this->display();
    }

    /**
     * 登出
     */
    public function logout(){
    	session(null);
    	$this->display('index');
    }
}