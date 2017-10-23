<?php

/**
 * @version 2017-07-17
 * @author ke
 */
namespace Index\Controller;
use Index\Common\CommonController;


class AboutController extends CommonController
{
    /**
     * 页面显示
     * @version 2017-07-17
     * @author ke
     *
     */

    public function about(){

        $arrData=D('about')->select();
        $this->assign('arrData',$arrData);
        $this->display();

    }

    /**
     * 申请入读
     * @version 2017-07-21
     * @author ke
     *
     */

    public function enroll(){
        $bolCheckCode = check_verify($_POST['imgVftNum']); //验证图形验证码
        if (!$bolCheckCode) {
            $this->ajaxReturn('0');
            return false;
        }
        $_POST['time']=date('Y-m-d H:i:s');
        $_POST['status']='0';
        $intNum=D('enroll')->add($_POST);
        $arrAdmin=D('admin')->find();
        if($intNum){
            $title='申请入读--中创学院';
            if($_POST['sex']=='男'){
                $content="尊敬的".$_POST['name']."先生，您已经成功申请入读中创学院，5个工作日内我们的工作人员会与您取得联系，指引您完成后续报名，谢谢您的参与！中创学院官网：http://www.chinacii.cn/";
            }else{
                $content="尊敬的".$_POST['name']."小姐，您已经成功申请入读中创学院，5个工作日内我们的工作人员会与您取得联系，指引您完成后续报名，谢谢您的参与！中创学院官网：http://www.chinacii.cn/";
            }
            $strCon="姓名：".$_POST['name']."<br>性别：".$_POST['sex']."<br>手机号码：".$_POST['phone']."<br>邮箱：".$_POST['email']."<br>公司名称：".$_POST['company']."<br>职务：".$_POST['job']."<br>公司地址：".$_POST['company'];

            sendMail($_POST['email'],$title,$content);
            sendMail($arrAdmin['email'],'学员申请入读资料',$strCon);

            $this->ajaxReturn('1');

        }else{
            $this->ajaxReturn('2');
        }

    }

    /**
     * 生成验证码
     * @author ke
     * @version 2017-07-21
     */

    public function verify_c() {
        ob_clean();
        $Verify = new \Think\Verify();
        $Verify->fontSize = 18;
        $Verify->length = 4;
        $Verify->useNoise = false;
        $Verify->codeSet = '0123456789';
        $Verify->imageW = 130;
        $Verify->imageH = 40;
        $Verify->expire = 600;
        return $Verify->entry();
    }
}