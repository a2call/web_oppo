<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }

    public function Login(){
    	$condition['username'] = $_POST['username'];
    	$condition['passwd'] = $_POST['password'];

    	$user = M('user');

    	$result = $user->where($condition)->find();
    	if($result){
    		$_SESSION['id'] = $result;
    		$_SESSION['username'] = $condition['username'];
	    	echo "ok";
    	}else{
    		echo "error";
    	}
    }
}