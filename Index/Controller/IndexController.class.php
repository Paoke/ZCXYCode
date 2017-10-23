<?php
/**
 * 首页控制器
 * @verson 2017-07-17
 * @author ke
 */

namespace Index\Controller;
use Index\Common\CommonController;

class IndexController extends CommonController
{

    /**
     * 首页显示
     */

    public function index(){

        $arrBanner=D('banner')->where('status=1')->order('orderid asc')->select();
        $arrView=D('view')->where('status=1')->order('orderid desc')->field('vied,time,title,class,indeximg')->limit(3)->select();
        $arrTeacher=D('teacher')->where('status=1')->order('orderid asc')->limit(10)->select();

        foreach ( $arrView as $k=>$v) {
            $arrView[$k]['times'][0]=substr($v['time'],0,4);
            $arrView[$k]['times'][1]=substr($v['time'],5,2);
            $arrView[$k]['times'][2]=substr($v['time'],8,2);
        }

        $this->assign('arrBanner',$arrBanner);
        $this->assign('arrView',$arrView);
        $this->assign('arrTeacher',$arrTeacher);
        $this->display();
    }

}