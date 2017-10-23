<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/21
 * Time: 14:13
 */

namespace Admin\Controller;
use Common\Controller\CommonControllers;

class EnrollController extends CommonControllers
{

    /**
     * 报名列表
     * @version 2017-07-21
     */
    public function enrollList(){

        $arrData=D('enroll')->order('enid desc')->select();
        $this->assign('size',sizeof($arrData));
        $this->assign('arrData',$arrData);
        $this->display();

    }

    /**
     * 上下架
     * @version 2017-06-30
     * @author ke
     * @param $enid string 序号
     * @param $status string 状态
     */

    public function startStopMember($enid,$status){
        $intNum=D('enroll')->where('enid='.$enid)->setField('status',trim($status));
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }

    /**
     * 添加成员
     * @version 2017-07-06
     * @author ke
     */

    public function addMember(){
        if(IS_POST){
            $_POST['time']=date('Y-m-d H:i:s');
            $_POST['status']=0;
            $intNum=D('enroll')->add($_POST);
            if($intNum){
                echo 'true';
            }else{
                echo 'false';
            }
        }else{
            $this->display();
        }
    }

    /**
     * 编辑资料
     * @version 2017-07-08
     * @author ke
     * @param $enid string 序号
     */

    public function editMember($enid){
        if(IS_POST){
            $intNum=D('enroll')->where('enid='.$enid)->save($_POST);
            if($intNum){
                echo 'true';
            }else{
                echo 'false';
            }

        }else{
            $arrData=D('enroll')->where('enid='.$enid)->find();
            $this->assign('arrData',$arrData);
            $this->display();
        }
    }

    /**
     * 删除成员
     * @version 2017-07-07
     * @author ke
     * @param $enid string 序号
     */

    public function delMember($enid){
        $intNum=D('enroll')->where('enid='.$enid)->delete();
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }
}