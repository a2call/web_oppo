<?php
namespace Home\Controller;
use Think\Controller;
use Think\Log;

class RegisterController extends Controller {
    public function index(){
        $this->display();
    }

    public function VerifyCode(){
    	$config = array(
    			'length' => 4,
                'fontSize' => 16,
                'imageW' => 110,
                'imageH' => 28,
    		);
    	$Verify = new \Think\Verify($config);
    	return $Verify->entry();
    }

    public function check_username(){
        $username =  $_POST['username'];
        $sql = M('user');
        $result = $sql->where("username = '{$username}'")->find();
        if($result){
            echo "error";
        }else{
            echo "ok";
        }
    }

    public function insert(){
        $sql = M('user');
        $data['username'] = $_POST['username'];
        $data['passwd'] = $_POST['passwd'];

        $result = $sql->add($data);
        if($result){
            $_SESSION['id'] = $result;
            $_SESSION['username'] = $data['username'];
            echo "ok";
        }else{
            echo "error";
        }
    }

    public function checkVerifyCode(){
        $config = array(
                'length' => 4,
                'fontSize' => 16,
                'imageW' => 110,
                'imageH' => 28,
            );
        $verify = new \Think\Verify($config);
        $code = $_POST['code'];

        if($verify->check($code)){
            echo "ok";
        }else{
            echo "error";
        }
    }
}