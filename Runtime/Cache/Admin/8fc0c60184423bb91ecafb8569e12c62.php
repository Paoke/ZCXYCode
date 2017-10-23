<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo (ADMIN_LIB_JS_URL); ?>html5.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_LIB_JS_URL); ?>respond.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_LIB_JS_URL); ?>PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_CSS_URL); ?>H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_CSS_URL); ?>H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_LIB_HUI_ICONFONT_CSS_URL); ?>iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_LIB_ICHECK_CSS_URL); ?>icheck.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_SKIN_DEFAULT_CSS_URL); ?>skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_CSS_URL); ?>style.css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>中创学院后台 - 账号信息</title>
</head>
<body>
<div class="cl pd-20" style=" background-color:#5bacb6">
    <img class="avatar size-XL l" src="<?php echo (ADMIN_STATIC_HUI_IMG_URL); ?>user.png">
    <dl style="margin-left:80px; color:#fff">
        <dd class="pt-10 f-12" style="margin-left:0">账&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：<?php echo ($_SESSION['arrUser']['adminusername']); ?></dd>
        <dd class="pt-10 f-12" style="margin-left:0">登录次数：<?php echo ($_SESSION['arrUser']['logintime']); ?></dd>
    </dl>
</div>
<div class="pd-20">
    <table class="table">
        <tbody>
        <tr>
            <th class="text-r">手机：</th>
            <td><?php echo ($_SESSION['arrUser']['phone']); ?></td>
        </tr>
        <tr>
            <th class="text-r">邮箱：</th>
            <td><?php echo ($_SESSION['arrUser']['email']); ?></td>
        </tr>
        <tr>
            <th class="text-r">角色权限：</th>
            <td><?php echo ($_SESSION['arrUser']['role']); ?></td>
        </tr>
        <tr>
            <th class="text-r">注册时间：</th>
            <td><?php echo ($_SESSION['arrUser']['regtime']); ?></td>
        </tr>
        </tbody>
    </table>
</div>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_STATIC_HUI_JS_URL); ?>H-ui.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_STATIC_HUI_JS_URL); ?>H-ui.admin.js"></script>
</body>
</html>