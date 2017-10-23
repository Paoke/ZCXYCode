<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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

    <title>中创学院</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 报名管理 <span
        class="c-gray en">&gt;</span> 报名列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px"
                                              href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">
    &#xe68f;</i></a></nav>
<div class="page-container">
    
    <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l"><a class="btn btn-primary radius" data-title="添加成员" href="javascript:;"
                                                               onclick="member_add('添加成员', '/index.php/Admin/Enroll/addMember', '780', '600')"><i class="Hui-iconfont">
        &#xe600;</i> 添加成员</a></span> <span class="r">共有数据：<strong><?php echo ($size); ?></strong> 条</span></div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-hover table-sort">
            <thead>
            <tr class="text-c">
                <th width="80">姓名</th>
                <th width="50">性别</th>
                <th width="100">手机</th>
                <th width="150">邮箱</th>
                <th width="150">公司名称</th>
                <th width="100">职务</th>
                <th width="300">公司地址</th>
                <th width="150">报名时间</th>
                <th width="80">审核状态</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <?php if(is_array($arrData)): foreach($arrData as $k=>$vo): ?><tr class="text-c">
                <td><?php echo ($vo["name"]); ?></td>
                <td><?php echo ($vo["sex"]); ?></td>
                <td><?php echo ($vo["phone"]); ?></td>
                <td><?php echo ($vo["email"]); ?></td>
                <td><?php echo ($vo["company"]); ?></td>
                <td><?php echo ($vo["job"]); ?></td>
                <td><?php echo ($vo["position"]); ?></td>
                <td><?php echo ($vo["time"]); ?></td>
                <td class="td-status">
                    <?php if($vo["status"] == 1): ?><span class="label label-success radius">已审核</span>
                    <?php else: ?>
                    <span class="label label-defaunt radius">未审核</span><?php endif; ?>
                </td>
                <td class="f-14 td-manage">

                    <?php if($vo["status"] == 1): ?><a style="text-decoration:none"
                       onClick="member_stop(this,'<?php echo ($vo["enid"]); ?>','0')" href="javascript:;"title="取消审核">
                        <i class="Hui-iconfont">&#xe6de;</i>
                    </a><?php else: ?>
                    <a style="text-decoration:none"
                       onClick="member_start(this,'<?php echo ($vo["enid"]); ?>','1')" href="javascript:;" title="通过审核">
                        <i class="Hui-iconfont">&#xe603;</i>
                    </a><?php endif; ?>
                    <a style="text-decoration:none" class="ml-5" 
                       onClick="member_edit('编辑资料', '/index.php/Admin/Enroll/editMember?enid=<?php echo ($vo["enid"]); ?>', '780', '600')"  href="javascript:;" title="编辑">
                        <i class="Hui-iconfont">&#xe6df;</i>
                    </a>
                    <a style="text-decoration:none" class="ml-5"
                       onClick="member_del(this,'<?php echo ($vo["enid"]); ?>')" href="javascript:;" title="删除">
                        <i class="Hui-iconfont">&#xe6e2;</i>
                    </a>
                </td>
            </tr><?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERY_JS_URL); ?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_LIB_LAYER_JS_URL); ?>layer.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_LIB_MY97DATEPICKER_JS_URL); ?>WdatePicker.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_LIB_DATATABLES_JS_URL); ?>jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_STATIC_HUI_JS_URL); ?>H-ui.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_STATIC_HUI_JS_URL); ?>H-ui.admin.js"></script>
<script type="text/javascript">
    $('.table-sort').dataTable({
        //"aaSorting": [[0, "desc"]],//默认第几个排序
        "ordering":false,
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
            //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
            {"orderable": false, "aTargets": [6]}// 不参与排序的列
        ]
    });

    /*成员-添加*/
    function member_add(title, url, w, h) {
        layer_show(title, url, w, h);
    }
    /*成员-编辑*/
    function member_edit(title, url, w, h) {
        layer_show(title, url, w, h);
    }
    /*成员-删除*/
    function member_del(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            $.post('/index.php/Admin/Enroll/delMember?enid='+id, function (ret) {
                if (ret == 'true') {
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!', {icon: 1, time: 1000});
                }else{
                    layer.msg('删除失败!', {icon: 2, time: 1000});
                }
            },'text');
        });
    }
    /*成员下架*/
    function member_stop(obj, id ,status) {
        layer.confirm('确认取消通过审核吗？', function (index) {

            $.post('/index.php/Admin/Enroll/startStopMember?enid='+id+'&status='+status , function (ret) {
                if (ret == 'true') {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,'+id+',1)" href="javascript:;" title="通过审核"><i class="Hui-iconfont">&#xe603;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">未审核</span>');
                    $(obj).remove();
                    layer.msg('已取消!', {icon: 5, time: 1000});
                }else{
                    layer.msg('取消失败!', {icon: 2, time: 1000});
                }
            },'text');
            
        });
    }
    /*成员上架*/
    function member_start(obj, id,status) {
        layer.confirm('确认通过审核吗？', function (index) {

            $.post('/index.php/Admin/Enroll/startStopMember?enid='+id+'&status='+status, function (ret) {
                if (ret == 'true') {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,'+id+',0)" href="javascript:;" title="取消审核"><i class="Hui-iconfont">&#xe6de;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已审核</span>');
                    $(obj).remove();
                    layer.msg('已审核!', {icon: 6, time: 1000});
                }else{
                    layer.msg('审核失败!', {icon: 2, time: 1000});
                }
            },'text');
            
        });
    }
    /*排序移动*/
    function order(t,oper,id){
        var data_tr=$(t).parent().parent();

         //获取到触发的tr
        if(oper=="MoveUp"){    //向上移动
            if($(data_tr).prev().html()==null){ //获取tr的前一个相同等级的元素是否为空
                layer.msg('已经是最顶部了!', {icon: 6, time: 1000});
                return;
            }{
                var previd=$(data_tr).prev().children('td').eq(0).html();
                $.post('/index.php/Admin/Student/orderMember?stid='+id+'&oper='+oper+'&pnid='+previd, function (ret) {
                    if (ret == 'true') {
                        $(data_tr).insertBefore($(data_tr).prev()); //将本身插入到目标tr的前面
                    }else{
                        layer.msg('移动失败!', {icon: 2, time: 1000});
                    }
                },'text');

            }
        }else{
            if($(data_tr).next().html()==null){
                layer.msg('已经是最底部了!', {icon: 6, time: 1000});
                return;
            }{
                var nextid=$(data_tr).next().children('td').eq(0).html();
                $.post('/index.php/Admin/Student/orderMember?stid='+id+'&oper='+oper+'&pnid='+nextid, function (ret) {
                    if (ret == 'true') {
                        $(data_tr).insertAfter($(data_tr).next()); //将本身插入到目标tr的后面
                    }else{
                        layer.msg('移动失败!', {icon: 2, time: 1000});
                    }
                },'text');

            }
        }
    }
</script>
</body>
</html>