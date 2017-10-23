<?php

    //图标
    function getAuthIcon(){
              $arrIcon=array(
                  '0'=>'icon-user',
                  '1'=>'icon-pencil',
                  '2'=>'icon-table',
                  '3'=>'icon-cog',
                  '4'=>'icon-folder-open',
                  '5'=>'icon-file-text',
                  '6'=>'icon-bell',
                  '7'=>'icon-cogs'           
              );
              return $arrIcon;
    }
    
    function getVerifyStatus(){
        return array(
            "0"=>"审核通过",
            "1"=>"待审核",
            "2"=>"审核不通过"
        );
    }


    function getAuthAllInfo(){
         $objAuth=M("Authority");
         $arrDateInfo=$objAuth->order("auth_path")->select();
         $arrAuthAllInfo=array();
         foreach($arrDateInfo as $v){
             $arrAuthAllInfo[$v['auth_id']]=$v;
         }
         return $arrAuthAllInfo;
    }
    
    function getRoleAllInfo(){
         $objRole=M("Role");
         $arrDateInfo=$objRole->select();
         $arrRoleAllInfo=array();
         foreach($arrDateInfo as $v){
             $arrRoleAllInfo[$v['role_id']]=$v;
         }
         return $arrRoleAllInfo;
    }
    
    
    /**
     * TODO 基础分页的相同代码封装，使前台的代码更少
     * @param $count 要分页的总记录数
     * @param int $pagesize 每页查询条数
     * @return \Think\Page
     */
    function getpage($count, $pagesize) {
        $p = new Think\Page($count, $pagesize);
        $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $p->setConfig('prev', '上一页');
        $p->setConfig('next', '下一页');
        $p->setConfig('last', '末页');
        $p->setConfig('first', '首页');
        $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $p->lastSuffix = false;//最后一页不显示为总页数
        return $p;
    }

?>
