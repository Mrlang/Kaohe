<?php

namespace Admin\Controller;
use Think\Controller;
class ManagersController extends Controller {
    public function del(){
		$data['id'] = I('get.id');
		$manager = M('Manager');
		$res = $manager->where($data)->delete();
		if($res)
			$this->success('删除成功！',U('Index/managers'),1);
		else
			$this->error('删除失败...');
    }
    public function add(){
    	$this->display();
    }
    public function doadd(){
    	$data['name'] = I('post.username');
    	$data['passwd'] = I('post.password','',md5);
    	$data['role_id'] = 2;
    	$data['time'] = date("Y-m-d H:i:s",time());
    	$manager = M('Manager');
    	$res = $manager->add($data);
    	if($res)
    		$this->success('注册成功！',U('Index/managers'),1);
    	else
    		$this->error('出差失败...');
    }
}
    