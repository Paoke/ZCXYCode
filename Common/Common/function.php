<?php

//照片上传

function picture(){
    $upload=new Think\Upload();
    $upload->maxSize=8145728;
    $upload->autoSub=true;
    $upload->exts=array('jpg','gif','png','jpeg');
    $upload->rootPath='./Upload/';
    $upload->savePath='';
    $upload->subName=array('date','Ymd');
    $info=$upload->upload();
    return $info;
}

//function picture($urls,$id,$table) {
//    $upload = new \Think\Upload(); // 实例化上传类
//    $upload->maxSize = 8145728; // 设置附件上传大小
//    $upload->autoSub = false;
//    $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
//    $upload->rootPath = './Upload/' . "$urls" . '/'; // 设置附件上传根目录
//    $upload->savePath = ''; // 设置附件上传（子）目录
//    // 上传文件 
//    $info = $upload->upload();
//    //return $info;
//    if (!$info) {// 上传错误提示错误信息
//        return "0";
//        return false;
//    } else {// 上传成功
//        foreach ($info as $file) {
//            //echo $_SERVER['HTTP_HOST'];
//            $url["pic_url"] = "http://".$_SERVER['HTTP_HOST']."/Upload/$urls/".$file['savename'].""; 
//            //$url["pic_url"] = "http://110.64.211.42/Public/$urls/".$file['savename']."";   
//            $url["$id"]=session($id);
//            if (D("$table")->add($url)) {
//                
//            } else {
//                return "0";
//                return false;
//            }
//        }
//    }
//    return "1";
//}

/**
 * 邮件发送函数
 */
function sendMail($to, $title, $content) {

    Vendor('PHPMailer.PHPMailerAutoload');
    Vendor('PHPMailer.class.smtp');
    $mail = new PHPMailer(); //实例化
    $mail->IsSMTP(); // 启用SMTP
    $mail->Host=C('MAIL_HOST'); //smtp服务器的名称
    $mail->SMTPSecure = C('MAIL_SECURE');
    $mail->Port = C('MAIL_PORT');
    $mail->SMTPAuth = C('MAIL_SMTPAUTH'); //启用smtp认证
    $mail->Username = C('MAIL_USERNAME'); //你的邮箱名
    $mail->Password = C('MAIL_PASSWORD') ; //邮箱密码
    $mail->From = C('MAIL_FROM'); //发件人地址（也就是你的邮箱地址）
    $mail->FromName = C('MAIL_FROMNAME'); //发件人姓名
    $mail->AddAddress($to,"尊敬的客户");
    $mail->WordWrap = 50; //设置每行字符长度
    $mail->IsHTML(C('MAIL_ISHTML')); // 是否HTML格式邮件
    $mail->CharSet=C('MAIL_CHARSET'); //设置邮件编码
    $mail->Subject =$title; //邮件主题
    $mail->Body = $content; //邮件内容
    $mail->AltBody = "中创学院报名通知"; //邮件正文不支持HTML的备用显示
    return($mail->Send());
}

/**
 * 排序
 * @param $datasheet string 数据表
 * @param $column string 列名
 * @param $id string id序号
 * @param $pnid string 相关排序id
 *
 */

function order($datasheet,$column,$id,$pnid){

    $orderid1=D("$datasheet")
        ->where("$column=".$pnid)
        ->field('orderid')
        ->find();
    $orderid2=D("$datasheet")
        ->where("$column=".$id)
        ->field('orderid')
        ->find();

    $intNum1=D("$datasheet")
        ->where("$column=".$id)
        ->setField('orderid',(int)($orderid1['orderid']));
    $intNum2=D("$datasheet")
        ->where("$column=".$pnid)
        ->setField('orderid',(int)($orderid2['orderid']));

    if($intNum1&&$intNum2){
        return true;
    }else{
        return false;
    }
}

/**
 * 分页参数
 * @version 2017-07-18
 * @param1 int $intTotal 总条数
 * @param2 int $intPagesize 一页几条
 * @param3 int $intPage 当前页
 * @return array $arrPage
 */

function page($intTotal, $intPagesize, $intPage) {

    $intPageCount = ceil($intTotal / $intPagesize); //总页数
    if ($intPage > $intPageCount) {
        $intPage = $intPageCount;
    }
    if ($intPage == 0) {
        $intPage = 1;
    }
    $intFirstRow = $intPagesize * ($intPage - 1); //从第几行开始查
    $arrPage = array(
        'intPageCount' => $intPageCount,
        'intPage' => $intPage,
        'intFirstRow' => $intFirstRow
    );
    return $arrPage;
}

/**
 * 验证验证码
 * @author ke
 * @version 2017-07-21
 */

function check_verify($code) {
    if ($code == session('imgVftNum')) {
        return true;
    } else {
        return false;
    }
}

