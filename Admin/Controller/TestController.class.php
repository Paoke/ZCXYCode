<?php

namespace Admin\Controller;
use Think\Controller;

class TestController extends Controller{

    public function test(){
        //echo phpinfo();exit;
        $this->display();

    }
    public function add(){
        if(sendMail($_POST['mail'],$_POST['title'],$_POST['content']))
            echo "发送成功";
        else
            echo "发送失败";
    }

}