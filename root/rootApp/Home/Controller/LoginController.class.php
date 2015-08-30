<?php

namespace Home\Controller;
use Think\Controller;
use Think\Model;

class LoginController extends Controller {
    public function index(){
   		 $this->display();
    }

    public function doLogin(){
        $code = I('post.verify');
    	if(!check_verify($code, $id)){
    		$this->error('验证码错误！');
    	}
    	$readers = M('readers');
    	$data['name'] = I('post.username');
    	$data['passwd'] = I('post.password','',md5);
  		$res = $readers->where($data)->find(); 	
    	if($res){
    		session('name',$res['name']);
            var_dump(I('session.name'));
    		$this->success('登录成功！',U('Index/index'),3);
    	}else{
    		$this->error('登录失败,账号或密码错误...');
    	}

    }

    public function verify(){
    	$config = array(
			'fontsize'=>30,
			'useNoise'=>false,			
			'length'=>'4',
			'imageW'=>200,
		);
        $verify = new \Think\Verify($config);
        $verify->entry();
    }
}