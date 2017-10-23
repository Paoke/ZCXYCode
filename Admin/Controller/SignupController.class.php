<?php

namespace Admin\Controller;

use Common\Controller\CommonControllers;

class SignupController extends CommonControllers{
    
    /*
     * 报名列表
     */
    public function joinList(){
        $arrData=D('join')
                ->table('tic_join as a')
                ->join('tic_conference as b on a.coid=b.coid')
                ->field('a.joid,a.name,a.phone,a.email,a.job,a.company,a.way,a.time,b.name as coname')
                ->order('a.joid desc')
                ->select();
        $this->assign('size',sizeof($arrData));
        $this->assign('arrData',$arrData);
        $this->display();

    }
    
    /*
     * 删除记录
     */
    public function dataDel(){
        $intNum=D('join')->where('joid='.$_POST['joid'])->delete();
        if($intNum){
            echo json_encode('true');
        }else{
            echo json_encode('false');
        }
    }
}

