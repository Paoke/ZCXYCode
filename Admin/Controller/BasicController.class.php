<?php
/**
 * 常规设置控制器
 * @version 2017-07-13
 * @author ke
 */

namespace Admin\Controller;

use Common\Controller\CommonControllers;


class BasicController extends CommonControllers
{
    /**
     * 首页轮播图
     * @version 2017-07-13
     * @author ke
     */

    public function bannerList()
    {

        $arrData = D('banner')->order('orderid asc')->select();
        $this->assign('arrData', $arrData);
        $this->assign('size', sizeof($arrData));
        $this->display();

    }

    /**
     * 上传banner图
     * @version 2017-07-14
     * @author ke
     */

    public function addBanner()
    {
        if (IS_POST) {
            $intMax = D('banner')->max('orderid');
            $_POST['orderid'] = $intMax + 1;
            $_POST['img'] = $_POST['img_position'];
            $_POST['status'] = '1';
            $_POST['time'] = date('Y-m-d');
            $intNum = D('banner')->add($_POST);
            if ($intNum) {
                echo 'true';
            } else {
                echo 'false';
            }
        } else {
            $this->display();
        }
    }

    /**
     * 浏览图
     * @version 2017-07-14
     * @author ke
     * @param $img string 图片路径
     */

    public function viewPic($img)
    {
        $this->assign('img', $img);
        $this->display();
    }

    /**
     * 上下架图片
     * @version 2017-07-12
     * @author ke
     * @param $baid string 序号
     * @param $status string 状态
     */

    public function startStopMember($baid, $status)
    {
        $intNum = D('banner')->where('baid=' . $baid)->setField('status', trim($status));
        if ($intNum) {
            echo 'true';
        } else {
            echo 'false';
        }
    }

    /**
     * 删除
     * @version 2017-07-12
     * @author ke
     * @param $baid string 序号
     */

    public function delMember($baid)
    {
        $intNum = D('banner')->where('baid=' . $baid)->delete();
        if ($intNum) {
            echo 'true';
        } else {
            echo 'false';
        }
    }

    /**
     * 排序
     * @version 2017-07-08
     * @author ke
     * @param $baid string 序号
     * @param $pnid string 上一个或者下一个id
     */

    public function orderMember($baid, $pnid)
    {

        $ret = order('banner', 'baid', $baid, $pnid);

        if ($ret) {
            echo 'true';
        } else {
            echo 'false';
        }
    }

    /**
     * 栏目文字设置列表
     * @version 2017-07-18
     *
     */

    public function wordList()
    {

        $arrData = D('word')->select();
        $this->assign('arrData', $arrData);
        $this->display();
    }

    /**
     * 编辑栏目文字
     * @version 2017-07-18
     * @author ke
     * @param $woid string 序号id
     */

    public function editWord($woid){

        if(IS_POST){
            $intNum=D('word')->where('woid='.$_POST['woid'])->save($_POST);
            if ($intNum) {
                echo 'true';
            } else {
                echo 'false';
            }
        }else{
            $arrData=D('word')->where('woid='.$woid)->find();
            $this->assign('arrData',$arrData);
            $this->display();
        }
    }

}