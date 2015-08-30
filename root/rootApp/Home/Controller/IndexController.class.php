<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
Use Think\Page;
class IndexController extends Controller {
    public function test(){
        var_dump(I('session.name'));
       
    }
    public function index(){
	//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    $news = M('news');
    $count = $news->count();
    import('ORG.Util.Page');
    $page = new Page($count,4);
    $page->setConfig('first','首页');
    $page->setConfig('prev','上一页');
    $page->setConfig('next','下一页');
    $page->setConfig('last','末页');
    $page->setConfig('theme', ' 共 %TOTAL_ROW%条 共%TOTAL_PAGE%页新闻
    %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
    $show = $page->show();
    $data = $news->order('time desc')->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign('data',$data);
    $this->assign('page',$show);
    $this->display();
    }

    public function logout(){
         if(I('session.name')==''){
            $this->error('请先登录...');
         }else{
            var_dump($_SESSION);
            session_unset();
            session_destroy();
            var_dump($_SESSION);
            echo "session销毁成功";
            $this->success('退出成功！','index',3);
        }
        
       
    }

}