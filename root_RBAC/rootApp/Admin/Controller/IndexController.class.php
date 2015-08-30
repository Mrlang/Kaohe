<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	$this->display();
    }

    public function logout(){
    	var_dump(I('session.name'));
        session_unset();
        session_destroy();
        var_dump(I('session.name'));
        echo "session销毁成功";
    	$this->success('退出成功！',U('Home/Index/index'),3);
    }
}