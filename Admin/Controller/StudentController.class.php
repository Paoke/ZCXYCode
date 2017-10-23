<?php
/**
 * 优秀学员控制器
 * @version 2017-07-10
 * @author ke
 */

namespace Admin\Controller;
use Common\Controller\CommonControllers;

class StudentController extends CommonControllers
{
    /**
     * 成员列表
     * @version 2017-07-11
     * @author ke
     */

    public function memberList(){
        $arrData=D('student')->order('orderid asc,stid asc')->select();
        $this->assign('arrData',$arrData);
        $this->assign('size',sizeof($arrData));
        $this->display();
    }

    /**
     * 添加成员
     * @version 2017-07-11
     * @author ke
     */

    public function addMember(){
        if(IS_POST){
            $intMax=D('student')->max('orderid');
            $_POST['header']=$_POST['header_position'];
            $_POST['orderid']=$intMax+1;
            $_POST['time']=date('Y-m-d');
            $_POST['status']=1;
            $intNum=D('student')->add($_POST);
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
     * @version 2017-07-12
     * @author ke
     * @param $stid string 序号
     */

    public function editMember($stid){
        if(IS_POST){
            $_POST['header']=$_POST['header_position'];
            $intNum=D('student')->where('stid='.$stid)->save($_POST);
            if($intNum){
                echo 'true';
            }else{
                echo 'false';
            }

        }else{
            $arrData=D('student')->where('stid='.$stid)->find();
            $this->assign('arrData',$arrData);
            $this->display();
        }
    }

    /**
     * 上下架成员
     * @version 2017-07-12
     * @author ke
     * @param $stid string 序号
     * @param $status string 状态
     */

    public function startStopMember($stid,$status){
        $intNum=D('student')->where('stid='.$stid)->setField('status',trim($status));
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }

    /**
     * 删除成员
     * @version 2017-07-12
     * @author ke
     * @param $stid string 序号
     */

    public function delMember($stid){
        $intNum=D('student')->where('stid='.$stid)->delete();
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }

    /**
     * 成员排序
     * @version 2017-07-08
     * @author ke
     * @param $stid string 序号
     * @param $oper string 操作
     * @param $pnid string 上一个或者下一个id
     */

    public function orderMember($stid,$oper,$pnid){

        $ret=order('student','stid',$stid,$pnid);

        if($ret){
            echo 'true';
        }else{
            echo 'false';
        }
    }
}