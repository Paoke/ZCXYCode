<?php
/**
 * 前台师资控制器
 * @version 2017-07-18
 * @author ke
 */

namespace Index\Controller;
use Index\Common\CommonController;

class TeacherController extends CommonController
{

    /**
     * 师资页面
     * @version 2017-07-18
     * @author ke
     */

    public function teacher(){

        $arrData=D('teacher')->where('status=1')->order('orderid asc')->limit(0,10)->select();
        $intTotal = D("teacher")->where('status=1')->count(); //总条数
        $intPagesize = 10; //页面条数
        $arrPage = page($intTotal, $intPagesize, 1);
        $this->assign('arrPage', $arrPage);
        $this->assign('arrData', $arrData);
        $this->display();

    }

    /**
     *  滚动加载，ajax请求
     * @version 2017-07-18
     *
     */

    public function more(){

        $intPage = isset($_POST['page']) ? intval(trim($_POST['page'])) : 1; //当前页数
        $intTotal = D("teacher")->where('status=1')->count(); //总条数
        $intPagesize = 10; //页面条数
        $arrPage = page($intTotal, $intPagesize, $intPage);
        $arrData=D('teacher')->where('status=1')->order('orderid asc')->limit($arrPage['intFirstRow'],$intPagesize)->select();
        $this->ajaxReturn(json_encode($arrData));

    }

}