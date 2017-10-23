<?php
/**
 * 视野文章前台控制器
 * @version 2017-07-20
 * @author ke
 */

namespace Index\Controller;
use Index\Common\CommonController;

class ViewController extends CommonController
{

    /**
     *  视野列表页
     * @version 2017-07-20
     * @author ke
     */

    public function views(){
        $arrData=D('view')->where('status=1')->order('vied desc')->limit(0,10)->select();
        $intTotal = D("view")->where('status=1')->count(); //总条数
        $arrRelated=D('view')->where('status=1')
            ->field('vied,title,time,thumbimg')
            ->order("rand()")
            ->limit(5)
            ->select();
        $intPagesize = 10; //页面条数
        $arrPage = page($intTotal, $intPagesize, 1);
        $this->assign('arrPage', $arrPage);
        $this->assign('arrData', $arrData);
        $this->assign('arrRelated', $arrRelated);
        $this->display();
    }

    /**
     * 分类查询
     * @version 2017-07-20
     * @author ke
     * @param $class string 类别
     */

    public function group($class){
        $arrData=D('view')->where('status=1 and class='.$class)->order('vied desc')->select();
        $arrData=$this->sortData($arrData);
        $this->ajaxReturn(json_encode($arrData));
    }

    /**
     *  滚动加载，ajax请求
     * @version 2017-07-20
     * @author ke
     *
     */

    public function more(){

        $intPage = isset($_POST['page']) ? intval(trim($_POST['page'])) : 1; //当前页数
        $intTotal = D("view")->where('status=1')->count(); //总条数
        $intPagesize = 10; //页面条数
        $arrPage = page($intTotal, $intPagesize, $intPage);
        $arrData=D('view')->where('status=1')->order('vied desc')->limit($arrPage['intFirstRow'],$intPagesize)->select();
        $arrData=$this->sortData($arrData);
        $this->ajaxReturn(json_encode($arrData));

    }

    /**
     * 整理数据
     * @version 2017-07-20
     * @author ke
     * @param $arrData array 整理的数组
     * @return $arrData
     */

    public function sortData($arrData){
        foreach($arrData as $k=>$v){
            if($v['class']==1){
                $arrData[$k]['classname']="学院动态";
            }elseif($v['class']==2){
                $arrData[$k]['classname']="产业智库";
            }else{
                $arrData[$k]['classname']="时事热点";
            }
        }
        return $arrData;
    }

    /**
     * 视野详情页
     * @version 2017-07-20
     * @author ke
     * @param $vied string 序号
     */

    public function detail($vied){
        $arrData=D('view')->where('vied='.$vied)->find();
        $arrRelated=D('view')->where('status=1 and vied!='.$vied)
            ->field('vied,title,time,thumbimg')
            ->order("rand()")
            ->limit(5)
            ->select();

        $this->assign('arrData',$arrData);
        $this->assign('arrRelated',$arrRelated);
        $this->display();
    }

}