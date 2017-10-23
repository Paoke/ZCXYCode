<?php

namespace Admin\Controller;

use Common\Controller\CommonControllers;

class ArticleController extends CommonControllers{
    /*
     * 嘉宾文章列表
     */
    public function articleList(){
        $arrData=D('article')->table('tic_article a')
                ->join('tic_guest b ON a.guid=b.guid')
                ->field('a.arid,a.guid,a.title,a.source,a.time,a.seetimes,a.status,b.name')
                ->select();
        $this->assign('arrData',$arrData);
        $this->assign('size',  sizeof($arrData));
        $this->display();
    }
    /*
     * 添加文章
     */
    public function addArticle(){
        if(IS_POST){
            $_POST['time']=date('Y-m-d H:i:s');
            $_POST['status']='1';
            $intNum=D('article')->add($_POST);
            if($intNum){
                echo json_encode('true');
            }else{
                echo json_encode('false');
            }
          
        }else{
            $arrData=D('guest')->field('guid,name')->order('guid desc')->select();
            $this->assign('arrData',$arrData);
            $this->display();
        }
    }
    /*
     * 编辑文章
     */
    public function editArticle($arid){
        if(IS_POST){
            $intNum=D('article')->where('arid='.$arid)->save($_POST);
            if($intNum){
                $arrData=array(
                    'result'=>'true'
                );
            }else{
                $arrData=array(
                    'result'=>'false'
                );
            }
            $this->ajaxReturn(json_encode($arrData));
        }else{
            $arrArticle=D('article')->where('arid='.$arid)->find();
            $arrData=D('guest')->field('guid,name')->order('guid desc')->select();
            $this->assign('arrArticle',$arrArticle);
            $this->assign('arrData',$arrData);
            $this->display();
        }
    }
    /*
     * 删除文章
     */
    public function delArticle(){
        $arid=trim($_POST['arid']);
        $intNum=D('article')->where('arid='.$arid)->delete();
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }
    
    /*
     * 文章上下架
     */
    public function startStopArticle(){
        $arid=trim($_POST['arid']);
        $intNum=D('article')->where('arid='.$arid)->setField('status',trim($_POST['status']));
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }
    /*
     * 查看文章详情
     */
    public function seeArticle($arid){
        $arrArticle=D('article')->table('tic_article as a')
                ->join('left JOIN tic_guest as b on a.guid=b.guid')
                ->where('a.arid='.$arid)
                ->field('a.arid,a.guid,a.title,a.seetimes,a.banner,a.link,a.content,b.name,b.header,b.job,b.introduce')
                ->find();
        $this->assign('arrArticle',$arrArticle);
        $this->display();
    }
    /*
     * 上传嘉宾图片
     */
    public function uploadPic($type){
        $info=  picture();
        if($info){
                $arrRet=array(
                    'result'=>'true',
                    'img'=>$info['banner1']['savepath'].$info['banner1']['savename']
                );
        }else{
            $arrRet=array(  
                    'result'=>'false'
            );
        }
        echo json_encode($arrRet);
    }
}