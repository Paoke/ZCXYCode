<?php /* Smarty version Smarty-3.1.6, created on 2017-06-22 10:15:24
         compiled from "D:/xampp/htdocs/ZCXYCode/Admin/View\Users\adminEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:18180594b27d2f19637-07336323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ab58820fc1d537064144005d1a3a2171bc414f6' => 
    array (
      0 => 'D:/xampp/htdocs/ZCXYCode/Admin/View\\Users\\adminEdit.html',
      1 => 1498097693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18180594b27d2f19637-07336323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_594b27d309e5e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594b27d309e5e')) {function content_594b27d309e5e($_smarty_tpl) {?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
        <meta http-equiv="Cache-Control" content="no-siteapp"/>
        <LINK rel="Bookmark" href="/favicon.ico">
        <LINK rel="Shortcut Icon" href="/favicon.ico"/>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="<?php echo @ADMIN_LIB_JS_URL;?>
html5.js"></script>
        <script type="text/javascript" src="<?php echo @ADMIN_LIB_JS_URL;?>
respond.min.js"></script>
        <script type="text/javascript" src="<?php echo @ADMIN_LIB_JS_URL;?>
PIE_IE678.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_STATIC_HUI_CSS_URL;?>
H-ui.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_STATIC_HUI_CSS_URL;?>
H-ui.admin.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_LIB_HUI_ICONFONT_CSS_URL;?>
iconfont.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_LIB_ICHECK_CSS_URL;?>
icheck.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_STATIC_HUI_SKIN_DEFAULT_CSS_URL;?>
skin.css" id="skin"/>
        <link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_STATIC_HUI_CSS_URL;?>
style.css"/>
        <!--[if IE 6]>
        <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
        <script>DD_belatedPNG.fix('*');</script>
        <![endif]-->
        <!--/meta 作为公共模版分离出去-->

        <title>云珠沙龙TIC</title>
    </head>
    <body>
        <article class="page-container">
            <form action="<?php echo @__CONTROLLER__;?>
/adminEdit" method="post" class="form form-horizontal" id="form-member-add">
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>账号：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value="<?php echo $_SESSION['arrUser']['adminusername'];?>
" placeholder="" id="username" name="username">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>手机：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value="<?php echo $_SESSION['arrUser']['phone'];?>
" placeholder="" id="phone" name="phone">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>邮箱：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value="<?php echo $_SESSION['arrUser']['email'];?>
" placeholder="@" name="email" id="email">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>角色权限：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value="<?php echo $_SESSION['arrUser']['role'];?>
" placeholder="" id="role" name="role">
                    </div>
                </div>
                <div class="row cl">
                    <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;保存&nbsp;&nbsp;">
                    </div>
                </div>
            </form>
        </article>

        <!--_footer 作为公共模版分离出去-->
        <script type="text/javascript" src="<?php echo @ADMIN_LIB_JQUERY_JS_URL;?>
jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo @ADMIN_LIB_LAYER_JS_URL;?>
layer.js"></script>
        <script type="text/javascript" src="<?php echo @ADMIN_LIB_ICHECK_JS_URL;?>
jquery.icheck.min.js"></script>
        <script type="text/javascript" src="<?php echo @ADMIN_LIB_JQUERYVALIDATION_JS_URL;?>
jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo @ADMIN_LIB_JQUERYVALIDATION_JS_URL;?>
validate-methods.js"></script>
        <script type="text/javascript" src="<?php echo @ADMIN_LIB_JQUERYVALIDATION_JS_URL;?>
messages_zh.min.js"></script>
        <script type="text/javascript" src="<?php echo @ADMIN_STATIC_HUI_JS_URL;?>
H-ui.js"></script>
        <script type="text/javascript" src="<?php echo @ADMIN_STATIC_HUI_JS_URL;?>
H-ui.admin.js"></script>
        <!--/_footer /作为公共模版分离出去-->

        <!--请在下方写此页面业务相关的脚本-->
        
        <script type="text/javascript">
            $(function () {
                $('.skin-minimal input').iCheck({
                    checkboxClass: 'icheckbox-blue',
                    radioClass: 'iradio-blue',
                    increaseArea: '20%'
                });

                $("#form-member-add").validate({
                    rules: {
                        username: {
                            required: true,
                            minlength: 2,
                            maxlength: 16
                        },
                        phone: {
                            required: true,
                            isMobile: true,
                        },
                        email: {
                            required: true,
                            email: true,
                        },
                        role: {
                            required: true
                        }

                    },
                    onkeyup: false,
                    focusCleanup: true,
                    success: "valid",
                    submitHandler: function (form) {
                        var username = $('#username').val();
                        var phone = $('#phone').val();
                        var email = $('#email').val();
                        var role = $('#role').val();
                        var data = {adminusername: username, phone: phone, email: email, role: role};
                        $.post('/index.php/Admin/Users/adminEdit', data, function (ret) {
                            var json = JSON.parse(ret);
                            if (json.result == 'true') {

                                layer.msg('修改成功!', {icon: 1, time: 1000},function(){
                                    var index = parent.layer.getFrameIndex(window.name);

                                    parent.layer.close(index);
                                });

                                
                            } else {
                                layer.msg('修改失败!', {icon: 1, time: 1000});
                            }

                        }, 'json');

                    }
                });
            });
        </script>
        
        <!--/请在上方写此页面业务相关的脚本-->
    </body>
</html><?php }} ?>