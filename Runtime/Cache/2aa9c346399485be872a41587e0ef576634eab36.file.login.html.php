<?php /* Smarty version Smarty-3.1.6, created on 2017-06-22 22:22:20
         compiled from "D:/xampp/htdocs/ZCXYCode/Admin/View\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3068594a274e30d906-51668370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aa9c346399485be872a41587e0ef576634eab36' => 
    array (
      0 => 'D:/xampp/htdocs/ZCXYCode/Admin/View\\Login\\login.html',
      1 => 1498141078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3068594a274e30d906-51668370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_594a274e3a9d2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594a274e3a9d2')) {function content_594a274e3a9d2($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>中创学院后台 - 管理员登录</title>
    <link rel="Shortcut Icon" href="<?php echo @ADMIN_IMG_URL;?>
favicon.ico"/>
    <!-- CSS -->
    <link href="<?php echo @ADMIN_CSS_URL;?>
reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo @ADMIN_CSS_URL;?>
supersized.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo @ADMIN_CSS_URL;?>
login.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="<?php echo @ADMIN_JS_URL;?>
html5.js"></script>
    <![endif]-->
    <script>
        var ADMIN_CSS_URL="<?php echo @ADMIN_CSS_URL;?>
";
        var ADMIN_JS_URL="<?php echo @ADMIN_JS_URL;?>
";
        var ADMIN_IMG_URL="<?php echo @ADMIN_IMG_URL;?>
";
    </script>
</head>

<body>

<div class="page-container">
    <h1>管理员登录</h1>

    <form action="<?php echo @__CONTROLLER__;?>
/login" method="post" id="formID">
        <input type="text" name="username" class="username" placeholder="用户名">
        <span class="username-error warn"></span>
        <input type="password" name="password" class="password" placeholder="密码">
        <span class="password-error warn"></span>
        <span class="check-error warn"></span>
        <button type="button" value="登陆" onclick="check()">登陆</button>
    </form>
</div>

<!-- Javascript -->
<script src="<?php echo @ADMIN_JS_URL;?>
jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.form.js"></script>
<script src="<?php echo @ADMIN_JS_URL;?>
supersized.3.2.7.min.js"></script>
<script src="<?php echo @ADMIN_JS_URL;?>
supersized-init.js"></script>
<script>
    $(function(){
        $('input').on('keyup',function(){
            $('.check-error').html("");
            var data = {};
            var t = $('#formID').serializeArray();
            $.each(t, function() {
              data[this.name] = this.value;
            });
            if(data['username']!=""){
                $('.username-error').html("");
            }
            if(data['password']!=""){
                $('.password-error').html("");
            }
        });
        
    });
    function check(){
        var data = {};
        var t = $('#formID').serializeArray();
        $.each(t, function() {
          data[this.name] = this.value;
        });
        if(data['username']==""){
            $('.username-error').html("用户名不能为空");
            return false;
        }
        if(data['password']==""){
            $('.password-error').html("密码不能为空");
            return false;
        }
        $("#formID").ajaxSubmit({
                    dataType: 'json',
                    beforeSend: function () {

                    },
                    uploadProgress: function (event, position, total, percentComplete) {

                    },
                    success: function (data) {
                        if (data == 'true') {
                            window.location.href="/index.php/Admin/Index/index";
                        } else {
                           $('.check-error').html("用户名或者密码错误");
                        }
                    },
                    error: function (xhr) {
                        //var result = $.trim(xhr.responseText);//去掉字符串两端的空白
                    }
                });
    }
</script>
</body>

</html>


<?php }} ?>