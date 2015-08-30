<?php

namespace Admin\Controller;
use Think\Controller;
class ReadersController extends Controller {
    public function del(){
		$data['id'] = I('get.id');
		$readers = M('Readers');
		$res = $readers->where($data)->delete();
		if($res)
			$this->success('删除成功！',U('Index/readers'),1);
		else
			$this->error('删除失败...');
    }

    public function add(){
    	$this->display();
    }
    public function doadd(){
    	$data['name'] = I('post.username');
    	$data['passwd'] = I('post.password','',md5);
    	$readers = M('Readers');
    	$res = $readers->add($data);
    	if($res)
    		$this->success('注册成功！',U('Index/readers'),1);
    	else
    		$this->error('出差失败...');
    }
}
    