<?php

namespace Home\Controller;
use Think\Controller;
class SignController extends Controller {
    public function index(){
   		 $this->display();
    }

    public function doSign(){
        $readers = M('readers');
    	$name = $data['name'] = I('post.username');
    	$data['passwd'] = I('post.password','',md5);
        $data['email'] = I('post.email');
        $data['phone'] = I('post.phone');
        var_dump($data);
        if($readers->where("name=$name")->find()){
            $this->error('该用户名已存在...');
        }else if($data['name']==''){
            $this->error('用户名不能为空！邮箱手机可以为空...');
        }else if(I('post.password')==''){
            $this->error('密码不能为空！邮箱手机可以为空...');
        }else{
            $res = $readers->add($data);
        }
        if($res){
            session('name',$res['name']);
            var_dump($_SESSION);

            $this->success('登录成功！',U('Index/index'),0);
        }
        
    }


}