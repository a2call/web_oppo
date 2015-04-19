<?php
namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller {
    public function index(){
        $this->display();
    }

    public function VerifyCode(){
    	$config = array(
    			'length' => 4,
    		);
    	$Verify = new \Think\Verify($config);
    	return $Verify->entry();
    }
}