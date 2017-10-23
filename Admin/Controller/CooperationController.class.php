<?php

namespace Admin\Controller;

use Common\Controller\CommonControllers;

class CooperationController extends CommonControllers{
    /*
     * 列表
     */
    public function lists($type){
        $arrData=D("$type")->select();
        $this->assign('size',sizeof($arrData));
        $this->assign('arrData',$arrData);
        $this->display("$type");
    }
    /*
     * 删除记录
     */
    public function dataDel($type,$tyid){
        $id=trim($_POST['id']);
        $intNum=D("$type")->where("$tyid=".$id)->delete();
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }
    /*
     * 图片预览
     */
    public function picSee($pic){
        $this->assign('pic',$pic);
        $this->display();
    }
}

