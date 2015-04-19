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
        }
        else{
            echo "ok";
        }
    }

    public function insert(){
        $sql = M('user');
        $data['username'] = $_POST['username'];
        $data['passwd'] = $_POST['passwd'];

        $result = $sql->add($data);
        if($result){
            echo "ok";
        }else{
            echo "error";
        }
    }
}