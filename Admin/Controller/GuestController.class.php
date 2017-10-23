<?php

namespace Admin\Controller;

use Common\Controller\CommonControllers;

class GuestController extends CommonControllers{
    
    /*
     * 嘉宾列表
     */
    public function guestList(){
        $intNum=D('guest')->Max('index_status');
        $arrData=D('guest')->field('guid,name,job,header,addtime,index_status')->select();
        $this->assign('size',  sizeof($arrData));
        $this->assign('max',$intNum+1);
        $this->assign('arrData',$arrData);
        $this->display();
    }
    /*
     * 添加嘉宾
     */
    public function addGuest(){
        if(IS_POST){
            $_POST['addtime']=date('Y-m-d H:i:s');
            $intNum=D('guest')->add($_POST);
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
            $this->display();
        }
    }
    /*
     * 编辑嘉宾资料
     * 
     */
    public function editGuest($guid){
        if(IS_POST){
            $intNum=D('guest')->where('guid='.$guid)->save($_POST);
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
            $arrData=D('guest')->where('guid='.$guid)->find();
            $arrData['introduce']=str_replace("<br>","\n",$arrData['introduce']);
            $this->assign('arrData',$arrData);
            $this->display();
        }
    }
    /*
     * 删除嘉宾
     */
    public function delGuest(){
        $guid=trim($_POST['guid']);
        $intNum=D('guest')->where('guid='.$guid)->delete();
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }
    /*
     * 嘉宾上下架
     */
    public function startStopGuest(){
        $guid=trim($_POST['guid']);
        $intNum=D('guest')->where('guid='.$guid)->setField('index_status',trim($_POST['status']));
        if($intNum){
            echo 'true';
        }else{
            echo 'false';
        }
    }
    /*
     * 上传嘉宾图片
     */
    public function uploadPic($type){
        $info=  picture();
        if($info){
            if($type=='header'){
                $arrRet=array(
                    'result'=>'true',
                    'img'=>$info['header']['savepath'].$info['header']['savename']
                );
            }else if($type=="listimg"){
                $arrRet=array(
                    'result'=>'true',
                    'img'=>$info['listimg']['savepath'].$info['listimg']['savename']
                );
            }else{
                $arrRet=array(
                    'result'=>'true',
                    'img'=>$info['speechimg']['savepath'].$info['speechimg']['savename']
                );
            }
        }else{
            $arrRet=array(  
                    'result'=>'false'
            );
        }
        echo json_encode($arrRet);
    }
}

