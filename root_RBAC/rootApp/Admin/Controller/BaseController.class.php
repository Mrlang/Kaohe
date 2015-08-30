<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller{
    Public function _initialize(){
        if (!isset($_SESSION['id'])){
           $this->error('请先登录', U('/Login/index')); 
        }
        $access = \Org\Util\Rbac::AccessDecision();
        $a=\Org\Util\RBAC::checkAccess();
        echo "$a";
        if(!$access){
        	echo "没有权限";
            //$this->error('你没有权限');
        }
   }
}