<?php
/**
 * banner图控制器
 * @version 2017-6-25
 * @author ke
 */

namespace Admin\Controller;

use Common\Controller\CommonControllers;

class BannerController extends  CommonControllers
{
    /**
     * 添加bannner图
     * @version 2017-6-26
     * @author ke
     */
    public function add()
    {
        if(IS_POST){

        }else{
            $this->display();
        }
    }
}