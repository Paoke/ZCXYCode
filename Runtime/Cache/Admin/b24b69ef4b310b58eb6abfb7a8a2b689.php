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
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_LIB_ICHECK_JS_URL); ?>icheck.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_SKIN_DEFAULT_CSS_URL); ?>skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_CSS_URL); ?>style.css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="<?php echo (ADMIN_LIB_JS_URL); ?>DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>我的桌面</title>
</head>
<body>
<div class="page-container">
    <h2>登录成功！</h2>
    <p>上次登录时间：<?php echo ($_SESSION['arrUser']['lastlogin']); ?></p>
    <p>上次登录IP地址：<?php echo ($_SESSION['arrUser']['lastip']); ?></p>
</div>
<footer class="footer mt-20">
    <div class="container">
        <p>
            Copyright &copy;chinacii.cn All Rights Reserved.<br>
    </div>
</footer>
<script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERY_JS_URL); ?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_STATIC_HUI_JS_URL); ?>H-ui.js"></script>
</body>
</html>