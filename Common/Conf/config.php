<?php
return array(
//'配置项'=>'配置值'
    //模板配置 smarty模板
    //'TMPL_ENGINE_TYPE' => 'smarty',
    //设置前台默认模板
    'DEFAULT_MODULE' => 'Index',
    /* 数据库设置 */
    'DB_TYPE' => 'mysql',     // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'zcxy',          // 数据库名
    'DB_USER' => 'root',      // 用户名
    'DB_PWD' => 'root',          // 密码
    'DB_PORT' => '3306',        // 端口
    'DB_PREFIX' => 'zcxy_',    // 数据库表前缀
    'DB_CHARSET' => 'utf8',     // 数据库编码默认采用utf8
    //'TMPL_EXCEPTION_FILE'   =>  './Common/error.php',// 异常页面的模板文件


    // 配置邮件发送服务器
    //'MAIL_HOST' =>'smtp.qq.com',//smtp服务器的名称
    'MAIL_HOST' =>'smtp.exmail.qq.com',
    'MAIL_SMTPAUTH' =>true, //启用smtp认证
    'MAIL_USERNAME' =>'zcxy@chinacii.cn',//你的邮箱名
    'MAIL_FROM' =>'zcxy@chinacii.cn',//发件人地址
    'MAIL_FROMNAME'=>'中创学院',//发件人姓名
    //'MAIL_PASSWORD' =>'xwpkuopjoatqbibb',//邮箱密码
    'MAIL_PASSWORD' =>'ZCxy2016',
    'MAIL_CHARSET' =>'utf-8',//设置邮件编码
    'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件
    'MAIL_PORT' =>'465',//设置ssl连接smtp服务器的远程服务器端口号
    'MAIL_SECURE' =>'ssl',//设置使用ssl加密方式登录鉴权
);