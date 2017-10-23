<?php
/**
 * 前台案例控制器
 * @version 2017-07-19
 * @author ke
 */

namespace Index\Controller;
use Index\Common\CommonController;


class CaseController extends CommonController
{

    /**
     *  案例列表页
     * @version 2017-07-19
     * @author ke
     */

    public function cases(){
        $arrData=D('case')->where('status=1')->order('orderid desc')->limit(0,9)->select();
        $intTotal = D("case")->where('status=1')->count(); //总条数
        $intPagesize = 9; //页面条数
        $arrPage = page($intTotal, $intPagesize, 1);
        $this->assign('arrPage', $arrPage);
        $this->assign('arrData', $arrData);
        $this->display();
    }

    /**
     *  滚动加载，ajax请求
     * @version 2017-07-19
     *
     */

    public function more(){

        $intPage = isset($_POST['page']) ? intval(trim($_POST['page'])) : 1; //当前页数
        $intTotal = D("case")->where('status=1')->count(); //总条数
        $intPagesize = 9; //页面条数
        $arrPage = page($intTotal, $intPagesize, $intPage);
        $arrData=D('case')->where('status=1')->order('caid desc')->limit($arrPage['intFirstRow'],$intPagesize)->select();
        $this->ajaxReturn(json_encode($arrData));

    }

    /**
     * 案例详情页
     * @version 2017-07-18
     * @author ke
     * @param $caid string 序号
     */

    public function detail($caid){

        $arrData=D('case')->where('caid='.$caid)->find();
        $arrRelated=D('case')->where('status=1 and caid!='.$caid)
            ->field('caid,title,time')
            ->order("rand()")
            ->limit(8)
            ->select();

        $this->assign('arrData',$arrData);
        $this->assign('arrRelated',$arrRelated);
        $this->display();
    }
}