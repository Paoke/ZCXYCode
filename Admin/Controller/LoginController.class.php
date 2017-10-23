<?php

/**
 * 登录控制器
 * @version 2017-06-21
 * @author ke
 */

namespace Admin\Controller;
use Think\Controller;


class LoginController extends Controller
{

    /**
     * 登录后台
     * @version 2017-06-21
     * @author ke
     */

    public function login(){
        if(IS_POST){
            $strUserName=  trim($_POST['username']);
            $strPassWord= trim($_POST['password']);
            $arrUser=D("admin")->where("adminusername='" . $strUserName . "' and password='" . $strPassWord . "'")->find();
            if($arrUser){
                session('arrUser',$arrUser);
                $arrData['lastlogin']=date('Y-m-d H:i:s');
                $arrData['lastip']=$_SERVER['REMOTE_ADDR'];
                $arrData['logintime']=$arrUser['logintime']+1;
                D('admin')->where("adminusername='" . $strUserName . "' and password='" . $strPassWord . "'")->save($arrData);
                echo json_encode('true');
            }else{
                echo json_encode('false');
            }
        }else{
            $this->display();

        }
        
    }
    
    /**
     * 退出后台
     * @version 2017-06-21
     * @author ke
     */

    public function out(){
        session_destroy();
        $this->redirect('Admin/login/login');

    }
    
}

