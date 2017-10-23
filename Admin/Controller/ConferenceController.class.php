<?php

namespace Admin\Controller;

use Common\Controller\CommonControllers;

class ConferenceController extends CommonControllers {
    /*
     * 大会列表
     */

    public function conferenceList() {
        $arrData = D('conference')
                ->field('coid,name,time,province,city,area,position,status,addtime')
                ->select();
        $this->assign('arrData', $arrData);
        $this->assign('size', sizeof($arrData));
        $this->display();
    }

    /*
     * 添加大会
     */

    public function addConference() {
        if (IS_POST) {
            $_POST['introduce'] = str_replace("\n", "<br>", $_POST['introduce']);
            $_POST['status'] = '0';
            $_POST['addtime'] = date('Y-m-d H:i:s');
            $intNum = D('conference')->add($_POST);
            if ($intNum) {
                session('coid', $intNum);
                echo json_encode('true');
            } else {
                echo json_encode('false');
            }
        } else {
            $itemnum = trim($_GET['itemnum']);
            $arrGuest = D('guest')->field('guid,name')->select();
            $arrArticle = D('article')->where('status=1')->field('arid,title')->select();
            $this->assign('arrGuest', $arrGuest);
            $this->assign('arrArticle', $arrArticle);
            $this->assign('itemnum', $itemnum);
            $this->assign('num1',rand(10,100));
            $this->assign('num2',rand(10,100));
            $this->display();
        }
    }

    /*
     * 编辑大会
     */

    public function editConference() {
        if(IS_POST){
            $intNum=D('conference')->where('coid='.$_GET['coid'])->save($_POST);
            if ($intNum) {
                echo json_encode('true');
            } else {
                echo json_encode('false');
            }
        }else{
            $arrGuest = D('guest')->field('guid,name')->select();
            $arrArticle = D('article')->where('status=1')->field('arid,title')->select();
            $arrData = D('conference')->where('coid=' . $_GET['coid'])->find();
            $arrSchedule=D('schedule')->where('coid='.$_GET['coid'])->order('scid asc')->select();
            $arrSpot=D('spot')->where('coid=' . $_GET['coid'])->select();
            $arrData['provinceid'] = substr($arrData['areaid'], 0, 2);
            $arrData['cityid'] = substr($arrData['areaid'], 0, 4);
            $arrData['introduce']=str_replace("<br>","\n",$arrData['introduce']);
            $arrData['guest_ids_array']=explode(',',substr($arrData['guest_ids'],0,strlen($arrData['guest_ids'])-1)); 
            $arrData['focus_ids_array']=explode(',',substr($arrData['focus_ids'],0,strlen($arrData['focus_ids'])-1)); 
            $this->assign('arrGuest', $arrGuest);
            $this->assign('arrArticle', $arrArticle);
            $this->assign('arrData',$arrData);
            $this->assign('arrSchedule',$arrSchedule);
            $this->assign('arrSpot',$arrSpot);
            $this->display();
        }
    }
    /*
     * 图片上传
     */

    public function reviewPic($type) {
//        $info = picture();
//        if ($info) {
//            $arrData = array(
//                'review_img1' => $info['review_img1']['savepath'] . $info['review_img1']['savename'],
//                'review_img2' => $info['review_img2']['savepath'] . $info['review_img2']['savename']
//            );
//            $intNum = D('conference')->where('coid=' . session('coid'))->save($arrData);
//            if ($intNum) {
//                echo json_encode('true');
//            } else {
//                echo json_encode('false');
//            }
//        } else {
//            echo json_encode('false');
//        }
        $info=  picture();
        $intNum=D('conference')
                ->where('coid='.session('coid'))
                ->setField("$type", $info["$type"]['savepath'].$info["$type"]['savename']);
        if($intNum){
            echo json_encode('true');
        }else{
            echo json_encode('false');
        }
    }
    /*
     * 图片上传
     */

    public function uploadPic() {
        $info = picture();
        if ($info) {
            $arrData = array(
                'banner' => $info['banner']['savepath'] . $info['banner']['savename'],
                'intro_img' => $info['intro_img']['savepath'] . $info['intro_img']['savename'],
                'light_img' => $info['light_img']['savepath'] . $info['light_img']['savename'],
                'position_img' => $info['position_img']['savepath'] . $info['position_img']['savename'],
                'coope_img' => $info['coope_img']['savepath'] . $info['coope_img']['savename']
            );
            $intNum = D('conference')->where('coid=' . session('coid'))->save($arrData);
            if ($intNum) {
                echo json_encode('true');
            } else {
                echo json_encode('false');
            }
        } else {
            echo json_encode('false');
        }
    }

    /*
     * 上传特邀嘉宾
     */

    public function guests($field) {
        if($_GET['coid']==""){
            $intNum = D('conference')->where('coid=' . session('coid'))->setField("$field", $_POST["$field"]);
        }else{
            $intNum = D('conference')->where('coid=' . $_GET['coid'])->setField("$field", $_POST["$field"]);
        }
        if ($intNum) {
            echo json_encode('true');
        } else {
            echo json_encode('false');
        }
    }

    /*
     * 批量上传展示图
     * @version:2016.08.11
     */

    function Upload() {
        $info = picture();
        $arrData = array(
            'coid' => $_REQUEST['coid']==""?session('coid'):$_REQUEST['coid'],
            'spot' => $_REQUEST['spot'],
            'img' => $info["Filedata"]['savepath'] . $info["Filedata"]['savename']
        );
        D('spot')->add($arrData);
    }

    /*
     * 上传大会日程
     */

    public function schedule() {
        $_POST['coid']=session('coid');
        $intNum = D('schedule')->add($_POST);
        if ($intNum) {
            echo json_encode('true');
        } else {
            echo json_encode('false');
        }
    }
    
    public function scheduleEdit() {
        $intNum = D('schedule')->where('scid='.$_POST['scid'])->save($_POST);
        if ($intNum) {
            echo json_encode('true');
        } else {
            echo json_encode('false');
        }
    }

    /*
     * 删除大会
     * 
     */

    public function delConference() {
        $intNum = D('conference')->where('coid=' . $_POST['coid'])->delete();
        if ($intNum) {
            echo json_encode('true');
        } else {
            echo json_encode('false');
        }
    }

    /*
     * 上下架大会
     */

    public function startStopConference() {
        $intNum = D('conference')->where('coid=' . $_POST['coid'])->setField('status', $_POST['status']);
        if ($intNum) {
            echo json_encode('true');
        } else {
            echo json_encode('false');
        }
    }
    /*
     * 修改模块图片
     */
    public function exitPic($type,$coid){
        $info=  picture();
        $intNum=D('conference')
                ->where('coid='.$coid)
                ->setField("$type", $info["$type"]['savepath'].$info["$type"]['savename']);
        if($intNum){
            echo json_encode('true');
        }else{
            echo json_encode('false');
        }
    }
    /*
     * 删除现场实录图片
     */
    public function delSpotPic(){
        $intNum=D('spot')->where('spid='.$_POST['spid'])->delete();
        if($intNum){
            echo json_encode('true');
        }else{
            echo json_encode('false');
        }
    }

}
