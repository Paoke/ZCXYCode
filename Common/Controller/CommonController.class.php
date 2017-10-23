<?php
    namespace Common\Controller;
    use Think\Controller;
    
    class CommonController extends Controller{
        function __construct() {
            parent::__construct();

            if($_SESSION['user_id']==null){
                $arrAllowAC=array("Users-login");
                $strAC=CONTROLLER_NAME.'-'.ACTION_NAME;
                if(!in_array($strAC,$arrAllowAC)){
                    $this->redirect("Users/login");
                    exit();
                }
            }else{
                //echo "登陆ID为:".$_SESSION['uesr_id'];
                $objUser=M("Users");
                $userid=$_SESSION['user_id'];
                $arrUserInfo=$objUser->where("user_id=".$userid)->find();

                $arrRoleAllInfo=getRoleAllInfo();

                $arrAC=explode(',',$arrRoleAllInfo[$arrUserInfo['role_id']]['auth_ac']);
                $arrAllowAC=array("Index-index","Index-left","Index-indexContent","Users-logout","Users-login");
                $strAC=CONTROLLER_NAME.'-'.ACTION_NAME;
                
                if($_SESSION['user_id']!=0){//是否超级管理员
                    
                   if($_SESSION['user_status']!=0 || !in_array($strAC,$arrAllowAC) && !in_array($strAC,$arrAC)){
//                        echo "没有足够的权限";
                        //exit();
                      
                       /*if($strAC!="Users-login"){
                           exit();
                       }*/
                 
                   
                   
                   }
                }

            }
           
        }
    }
?>
