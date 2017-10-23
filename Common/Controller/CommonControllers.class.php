<?php

/*
 * 后台公共控制器
 * 
 */

namespace Common\Controller;
use Think\Controller;

class CommonControllers extends Controller{
    //判断是否登录
    function __construct() {
        parent::__construct();
        
        if(!session('arrUser')){
            $this->redirect('Admin/login/login');
        }else{
            session('session_id',session_id());
        }
    }
}


