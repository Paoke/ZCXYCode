<?php

/**
 * 账号管理控制器
 * @version 2017-06-21
 * @author ke
 */

namespace Admin\Controller;

use Common\Controller\CommonControllers;


class UsersController extends CommonControllers
{

    /**
     * 账号信息查看
     * @version 2017-06-21
     * @author ke
     */
    public function adminShow()
    {
        $this->display();
    }

    /**
     * 账号信息修改
     * @version 2017-06-21
     * @author ke
     */

    public function adminEdit()
    {
        if (IS_POST) {
            $intNum = D('admin')->where("adminusername='" . session('arrUser')['adminusername'] . "' and password='" . session('arrUser')['password'] . "'")->save($_POST);
            if ($intNum) {
                $arrData = array(
                    'result' => 'true'
                );
            } else {
                $arrData = array(
                    'result' => 'false'
                );
            }
            $arrUser = D('admin')->where("adminusername='" . $_POST['adminusername'] . "' and password='" . session('arrUser')['password'] . "'")->find();
            session('arrUser', $arrUser);
            $this->ajaxReturn(json_encode($arrData));

        } else {
            $this->display();
        }
    }

    /**
     * 账号修改密码
     * @version 2017-06-22
     * @author ke
     */

    public function changePassword()
    {
        if (IS_POST) {
            $intNum = D('admin')->where("adminusername='" . session('arrUser')['adminusername'] . "' and password='" . session('arrUser')['password'] . "'")->save($_POST);
            if ($intNum) {
                $arrData = array(
                    'result' => 'true'
                );
            } else {
                $arrData = array(
                    'result' => 'false'
                );
            }
            $arrUser = D('admin')->where("adminusername='" . session('arrUser')['adminusername'] . "' and password='" . $_POST['password'] . "'")->find();
            session('arrUser', $arrUser);
            $this->ajaxReturn(json_encode($arrData));
        } else {
            $this->assign('arrUser', session('arrUser'));
            $this->display();
        }
    }
}
