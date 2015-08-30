<?php

namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function del(){
		$data['id'] = I('get.id');
		$news = M('News');
		$res = $news->where($data)->delete();
		if($res)
			$this->success('删除成功！',U('Index/news'),1);
		else
			$this->error('删除失败...');
    }
    public function add(){
    	$this->display();
    }
    public function doadd(){
    	$data['title'] = I('post.title');
    	$data['content'] = I('post.content');
    	$data['time'] = date("Y-m-d H:i:s",time());
    	$news = M('News');
    	$res = $news->add($data);
    	if($res)
    		$this->success('注册成功！',U('Index/news'),1);
    	else
    		$this->error('出差失败...');
    }
}
    