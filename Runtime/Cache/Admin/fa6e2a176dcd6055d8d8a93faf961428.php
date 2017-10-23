<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
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
        <link href="<?php echo (ADMIN_LIB_WEBUPLOADER_CSS_URL); ?>webuploader.css" rel="stylesheet" type="text/css" />
        <!--[if IE 6]>
        <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
        <script>DD_belatedPNG.fix('*');</script>
        <![endif]-->

        <title>中创学院</title>
    </head>
    <body>
        <article class="page-container">
            <form action="" method="post" class="form form-horizontal" id="form-member-add">
                <input type="hidden" id="stid" name="stid" value="<?php echo ($arrData["stid"]); ?>">
                <input type="hidden" id="header_position" name="header_position" value="<?php echo ($arrData["header"]); ?>">
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>姓名：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value="<?php echo ($arrData["name"]); ?>" placeholder="请输入嘉宾姓名" id="name" name="name">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>职位：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value="<?php echo ($arrData["job"]); ?>" placeholder="请输入嘉宾职位" id="job" name="job">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>头像：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="file" class="header" name="header" onchange="upload('header')"><span class="c-red" id="header_success">(图片规格：341*440)</span>
                        <br/><br/><img src="/Upload/<?php echo ($arrData["header"]); ?>" style="width:204px;height:204px;" id="header_see">
                        
                    </div>
                </div>

                <div class="row cl">
                    <div class="col-xs-2 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                        <input class="btn btn-primary radius" type="button" id="btn_submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                    </div>
                </div>
            </form>
        </article>

        <!--_footer 作为公共模版分离出去-->
        <script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERY_JS_URL); ?>jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery.form.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_LIB_LAYER_JS_URL); ?>layer.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_LIB_ICHECK_JS_URL); ?>jquery.icheck.min.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERYVALIDATION_JS_URL); ?>jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERYVALIDATION_JS_URL); ?>validate-methods.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERYVALIDATION_JS_URL); ?>messages_zh.min.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_STATIC_HUI_JS_URL); ?>H-ui.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_STATIC_HUI_JS_URL); ?>H-ui.admin.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>uploadPic.js"></script>
        <!--/_footer /作为公共模版分离出去-->

        <!--请在下方写此页面业务相关的脚本-->
        <script>
            $('#btn_submit').on('click', function () {
                var data = {};
                var t = $('#form-member-add').serializeArray();
                $.each(t, function() {
                    data[this.name] = this.value;
                });

                if(data.name==""||data.job==""||data.header_position==""){
                    layer.msg('请把资料填完整', {icon: 7, time: 2000});
                    return false;
                }

                $.post('/index.php/Admin/Student/editMember?stid='+data.stid, data, function (ret) {
                    if (ret == 'true') {
                        layer.msg('上传成功!', {icon: 1, time: 1000},function(){
                            var index = parent.layer.getFrameIndex(window.name);

                            parent.layer.close(index);
                        });

                    } else {
                        layer.msg('上传失败!', {icon: 2, time: 1000});
                    }
                },'text');
            });
        </script>
        <!--/请在上方写此页面业务相关的脚本-->
    </body>
</html>