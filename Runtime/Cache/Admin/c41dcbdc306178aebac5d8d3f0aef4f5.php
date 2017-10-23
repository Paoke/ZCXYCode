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
    <script type="text/javascript" src="<?php echo (ADMIN_LIB_JS_URL); ?>/html5.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_LIB_JS_URL); ?>/respond.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_LIB_JS_URL); ?>/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_CSS_URL); ?>/H-ui.min.css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->

    <title>中创学院</title>
</head>
<body>

<article class="page-container">
    <input type="hidden" id="picimg" name="picimg">
    <br><br>
    <div class="row cl">
        <label class="form-label col-xs-2 col-sm-4"></label>
        <label class="form-label col-xs-2 col-sm-1"><span class="c-red">* </span>选择图片：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input type="file" id="picture" name="picture"><span class="c-red">(图片规格：308*173)</span><br><br>
        </div>
        <label class="form-label col-xs-2 col-sm-4"></label>
        <label class="form-label col-xs-2 col-sm-1"><img src="" style="width:308px;height:173px;" id="picture_see"></label>
    </div>
    <br><br>
    <div class="row cl">
        <div class="col-xs-8 col-sm-9 col-xs-offset-2 col-sm-offset-2">
            <button class="btn btn-primary radius" id="btn_submit" type="button" >保存</button>

        </div>
    </div>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERY_JS_URL); ?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery.form.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_LIB_LAYER_JS_URL); ?>layer.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
    $('#btn_submit').on('click', function () {
        var picimg=$('#picimg').val();
        var source=$('#source').val();
        var explain=$('#explain').val();
        var link=$('#link').val();
        if(picimg==""||source==""||explain==""||link==""){
            layer.msg('请把资料填完整', {icon: 7, time: 2000});
            return false;
        }
        var data={picture:picimg,explain:explain,source:source,link:link};

        $.post('/index.php/Admin/Index/addLink', data, function (ret) {
            if (ret == 'true') {

                layer.msg('上传成功!', {icon: 1, time: 1000},function(){
                    var index = parent.layer.getFrameIndex(window.name);

                    parent.layer.close(index);
                });

            } else {
                layer.msg('上传失败!', {icon: 2, time: 1000});
                return false;
            }
        },'json');
    });
    $('#picture').on('change', function () {
        if ($("#mpicture").length > 0) {

        } else {
            $("#picture").wrap("<form id='mpicture' action='/index.php/Admin/Index/uploadPic?type=picture' method='post' enctype='multipart/form-data'></form>");
        }
        /*ajax提交*/
        $("#mpicture").ajaxSubmit({
            dataType: 'json',
            beforeSend: function () {

            },
            uploadProgress: function (event, position, total, percentComplete) {

            },
            success: function (data) {
                if (data.result == 'true') {
                    $('#picimg').val(data.img);
                    $('#picture_see').attr('src', '/Upload/' + data.img);
                    layer.msg('上传成功!', {icon: 1, time: 1000});
                    return false;
                } else {
                    $('#picture').val("");
                    layer.msg('上传失败!', {icon: 2, time: 1000});
                    return false;
                }
            },
            error: function (xhr) {
                //var result = $.trim(xhr.responseText);//去掉字符串两端的空白
            }
        });
    });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>