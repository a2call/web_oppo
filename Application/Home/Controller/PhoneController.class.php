<?php
namespace Home\Controller;
use Think\Controller;

class PhoneController extends Controller {
    public function index(){
    	$phone = M('phone');
    	$count = $phone->where('status = 0')->count();
    	$Page = new \Think\Page($count, 12);
    	$show = $Page->show();

    	$res = $phone->where('status = 0')->order('id desc')->limit($Page->firstRow, $Page->listRows)->select();
    	$this->assign("data", $res);
        $this->display();
    }
}