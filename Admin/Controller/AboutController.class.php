<?php
/**
 * 关于我们控制器
 * @version 2017-07-17
 * @author ke
 */

namespace Admin\Controller;

use Common\Controller\CommonControllers;

class AboutController extends CommonControllers{

    /**
     * 修改内容
     * @version 2017-07-17
     * @author ke
     * @param $abid string 序号
     */

    public function editContent($abid){

        if(IS_POST){
            $_POST['banner']=$_POST['banner_position'];
            $intNum=D('about')->where('abid='.$abid)->save($_POST);
            if($intNum){
                echo 'true';
            }else{
                echo 'false';
            }
        }else{
            $arrData=D('about')->where('abid='.$abid)->find();
            $this->assign('arrData',$arrData);
            $this->display();
        }
    }
}

