<?php
/**
 * 案例文章管理控制器
 * @version 2017-07-03
 * @author ke
 */

namespace Admin\Controller;
use Common\Controller\CommonControllers;


class CaseController extends CommonControllers
{

    /**
     * 文章列表
     * @version 2017-07-03
     * @author ke
     */

    public function articleList(){
        $arrData=D('case')->order('orderid desc')
            ->field('caid,title,position,status,speaker,from,time')
            ->select();
        $this->assign('arrData',$arrData);
        $this->assign('size',  sizeof($arrData));
        $this->display();
    }

    /**
     * 添加文章
     * @version 2017-07-03
     * @author ke
     */
    public function addArticle(){

        if(IS_POST){
            $intMax=D('case')->max('orderid');
            $_POST['status']='1';
            $_POST['orderid']=$intMax+1;
            $_POST['thumbimg']=$_POST['thumbimg_position'];
            $intNum=D('case')->add($_POST);
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
     * @version 2017-07-04
     * @author ke
     * @param $caid string 序号
     */
    public function editArticle($caid){

        if(IS_POST){
            $_POST['thumbimg']=$_POST['thumbimg_position'];
            $intNum=D('case')->where('caid='.$caid)->save($_POST);
            if($intNum){
                echo "true";
            }else{
                echo "false";
            }
        }else{
            $arrArticle=D('case')->where('caid='.$caid)->find();
            $this->assign('arrArticle',$arrArticle);
            $this->display();
        }
    }

    /**
     * 上下架文章
     * @version 2017-07-04
     * @author ke
     * @param $caid string 序号
     * @param $status string 状态
     */

    public function startStopArticle($caid,$status){
        $intNum=D('case')->where('caid='.$caid)->setField('status',trim($status));
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }

    /**
     * 删除文章
     * @version 2017-07-04
     * @author ke
     * @param $caid string 序号
     */

    public function delArticle($caid){
        $intNum=D('case')->where('caid='.$caid)->delete();
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
     * @param $caid string 序号
     * @param $oper string 操作
     * @param $pnid string 上一个或者下一个id
     */

    public function orderMember($caid,$oper,$pnid){

        $ret=order('case','caid',$caid,$pnid);
        if($ret){
            echo 'true';
        }else{
            echo 'false';
        }

    }

}