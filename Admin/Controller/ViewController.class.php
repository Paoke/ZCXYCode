<?php
/**
 * 视野文章管理控制器
 * @version 2017-06-26
 * @author ke
 */

namespace Admin\Controller;
use Common\Controller\CommonControllers;

class ViewController extends CommonControllers
{

    /**
     * 文章列表
     * @version 2017-06-26
     * @author ke
     */

    public function articleList(){
        $arrData=D('view')
                ->field('vied,title,class,status,author,from,time')->order('orderid desc')
                ->select();
        //var_dump($arrData);exit;
        $this->assign('arrData',$arrData);
        $this->assign('size',  sizeof($arrData));
        $this->display();
    }

    /**
     * 添加文章
     * @version 2017-06-27
     * @author ke
     */

    public function addArticle(){
        if(IS_POST){
            $intMax=D('view')->max('orderid');
            $_POST['status']='1';
            $_POST['orderid']=$intMax+1;
            $_POST['indeximg']=$_POST['indeximg_position'];
            $_POST['thumbimg']=$_POST['thumbimg_position'];
            $intNum=D('view')->add($_POST);
            if($intNum){
                echo json_encode('true');
            }else{
                echo json_encode('false');
            }
        }else{
            $this->display();
        }
    }

    /**
     * 编辑文章
     * @version 2017-07-01
     * @author ke
     * @param $vied string 序号
     */
    public function editArticle($vied){

        if(IS_POST){
            $_POST['indeximg']=$_POST['indeximg_position'];
            $_POST['thumbimg']=$_POST['thumbimg_position'];
            $intNum=D('view')->where('vied='.$vied)->save($_POST);
            if($intNum){
                echo "true";
            }else{
                echo "false";
            }
        }else{
            $arrArticle=D('view')->where('vied='.$vied)->find();
            $this->assign('arrArticle',$arrArticle);
            $this->display();
        }
    }

    /**
     * 上传图片
     * @version 2017-06-30
     * @author ke
     * @param $type string 图片位置
     */

    public function uploadPic($type){
        $info=  picture();
        if($info){
            $arrRet=array(
                'result'=>'true',
                'img'=>$info["$type"]['savepath'].$info["$type"]['savename']
            );
        }else{
            $arrRet=array(
                'result'=>'false'
            );
        }
        echo json_encode($arrRet);
    }

    /**
     * 上下架文章
     * @version 2017-06-30
     * @author ke
     * @param $vied string 序号
     * @param $status string 状态
     */

    public function startStopArticle($vied,$status){
        $intNum=D('view')->where('vied='.$vied)->setField('status',trim($status));
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }

    /**
     * 删除文章
     * @version 2017-06-30
     * @author ke
     * @param $vied string 序号
     */

    public function delArticle($vied){
        $intNum=D('view')->where('vied='.$vied)->delete();
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
     * @param $vied string 序号
     * @param $oper string 操作
     * @param $pnid string 上一个或者下一个id
     */

    public function orderMember($vied,$oper,$pnid){

        $ret=order('view','vied',$vied,$pnid);
        if($ret){
            echo 'true';
        }else{
            echo 'false';
        }

    }
}