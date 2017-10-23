<?php
/**
 * 师资队伍管理控制器
 * @version 2017-07-05
 * @author ke
 */

namespace Admin\Controller;
use Common\Controller\CommonControllers;

class TeacherController extends CommonControllers
{
    /**
     * 成员列表
     * @version 2017-07-05
     * @author ke
     */

    public function memberList(){
        $arrData=D('teacher')->order('orderid asc,teid asc')->select();
        $this->assign('arrData',$arrData);
        $this->assign('size',sizeof($arrData));
        $this->display();
    }

    /**
     * 添加成员
     * @version 2017-07-06
     * @author ke
     */

    public function addMember(){
        if(IS_POST){
            $intMax=D('teacher')->max('orderid');
            $_POST['header']=$_POST['header_position'];
            $_POST['orderid']=$intMax+1;
            $_POST['time']=date('Y-m-d');
            $_POST['status']=1;
            $intNum=D('teacher')->add($_POST);
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
     * @param $teid string 序号
     */

    public function editMember($teid){
        if(IS_POST){
            $_POST['header']=$_POST['header_position'];
            $intNum=D('teacher')->where('teid='.$teid)->save($_POST);
            if($intNum){
                echo 'true';
            }else{
                echo 'false';
            }

        }else{
            $arrData=D('teacher')->where('teid='.$teid)->find();
            $this->assign('arrData',$arrData);
            $this->display();
        }
    }

    /**
     * 上下架成员
     * @version 2017-07-07
     * @author ke
     * @param $teid string 序号
     * @param $status string 状态
     */

    public function startStopMember($teid,$status){
        $intNum=D('teacher')->where('teid='.$teid)->setField('status',trim($status));
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }

    /**
     * 删除成员
     * @version 2017-07-07
     * @author ke
     * @param $teid string 序号
     */

    public function delMember($teid){
        $intNum=D('teacher')->where('teid='.$teid)->delete();
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
     * @param $teid string 序号
     * @param $oper string 操作
     * @param $pnid string 上一个或者下一个id
     */

    public function orderMember($teid,$oper,$pnid){

        $ret=order('teacher','teid',$teid,$pnid);
        if($ret){
            echo 'true';
        }else{
            echo 'false';
        }

    }
}