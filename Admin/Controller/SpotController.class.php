<?php

namespace Admin\Controller;

use Common\Controller\CommonControllers;

/**
 * Class SpotController
 * @package Admin\Controller
 * 
 */

class SpotController extends CommonControllers{

    /**
     * 文章列表
     * @version:2017-04-23
     * @author:ke
     */

    public function spotList(){
        $arrData=D('sarticle')->table('tic_sarticle as a')
                ->join('tic_conference as b on a.coid=b.coid')
                ->field('a.said,a.title,a.content,a.status,a.addtime,a.source,b.name')
                ->select();
        $this->assign('arrData',$arrData);
        $this->assign('size',  sizeof($arrData));
        $this->display();
    }

    /**
     * 添加文章
     * @version:2017-04-23
     * @author:ke
     */

    public function addSpot(){
        if(IS_POST){
            $_POST['status']='1';
            $_POST['addtime']=date('Y-m-d H:i:s');
            $intNum=D('sarticle')->add($_POST);
            if($intNum){
                echo json_encode('true');
            }else{
                echo json_encode('false');
            }
        }else{
            $arrCoid=D('conference')->field('coid,name')->select();
            $this->assign('arrCoid',$arrCoid);
            $this->display();
        }
    }
    /*
     * 编辑文章
     */
    public function editSpot($said){
        if(IS_POST){
            $intNum=D('sarticle')->where('said='.$said)->save($_POST);
            if($intNum){
                echo json_encode('true');
            }else{
                echo json_encode('false');
            }
        }else{
            $arrData=D('sarticle')->where('said='.$said)->find();
            $arrCoid=D('conference')->field('coid,name')->select();
            $this->assign('arrCoid',$arrCoid);
            $this->assign('arrData',$arrData);
            $this->display();
        }
    }
    /*
     * 上下架文章
     */
    public function startStopSpot(){
        $said=trim($_POST['said']);
        $intNum=D('sarticle')->where('said='.$said)->setField('status',trim($_POST['status']));
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }
    /*
     * 删除文章
     */
    public function delSpot(){
        $said=trim($_POST['said']);
        $intNum=D('sarticle')->where('said='.$said)->delete();
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }
    /*
     * 预览文章
     */
    public function seeSpot($said){
        $arrData=D('sarticle')->where('said='.$said)->find();
        $this->assign('arrData',$arrData);
        $this->display();
    }
}


