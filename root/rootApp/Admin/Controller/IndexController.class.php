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

    public function news(){
        $news = M('news');
        $data = $news->order('time desc')->select();
        $this->assign('data',$data);
        $this->display();
    }
    
    public function readers(){
        $readers = M('readers');
        $data = $readers->select();
        $this->assign('data',$data);
        $this->display();
    }
  
    public function managers(){
        if(I('session.role_id')!=1){
            $this->error('对不起，你的管理员等级较低，不能查看或编辑其他管理员。。。');
        }
        $manager = M('manager');
        $data = $manager->select();
        $this->assign('data',$data);
        $this->display();
    }
}