<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中创学院 - 知行合一、创赢未来</title>
	<meta name="description" content="中创学院（China Institute of Innovation，CII）是一个探索未来、主动创新，培育创新产业领军人的学院；一个产学研政经媒各种资源整合，协同创新、合作共赢的平台；一个具有“创新、产业、国家、民族”情怀的学院。" />   
	<meta name="keywords" content="中创学院" /> 
	<meta name='viewport' content='user-scalable=no,width=750'>
	<link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>apply.css">
	<link rel="stylesheet" href="<?php echo (SITE_PUBLIC_URL); ?>Admin/lib/layer/2.1/skin/layer.css">
	<style>
		.layui-layer-dialog .layui-layer-content
		{
			font-size: 28px!important;
		}
	</style>
</head>
<body>
	<div class="banner">
		<img src="<?php echo (INDEX_IMAGES_URL); ?>sqrd.png" alt="">
	</div>
	<p class="tab_content_title">申请入读</p>
	<form action="" id="formID">
		<div class="inputDiv">
			<span class="inx"><span class="star">*</span>姓名：</span>
			<input type="text" id="name" name="name">
		</div>

		<div class="inputDiv">
			<span class="inx " style="display: inline-block;padding-top:5px;"><span class="star">*</span>性别：</span>
			<div class="" style="width:350px;display: inline-block;">
				<label><input id="man" type="radio" name="sex" value="男"><span>男</span></label>
				<label><input id="woman" type="radio" name="sex" value="女"><span>女</span></label>
			</div>
		</div>
		
		<div class="inputDiv">
			<span class="inx"><span class="star">*</span>手机：</span>
			<input type="text" id="phone" name="phone" maxlength="11" onkeyup="this.value = this.value.replace(/[^0-9]/g, '')">
		</div>

		<div class="inputDiv">
			<span class="inx"><span class="star">*</span>邮箱：</span>
			<input type="text" id="email" name="email">
		</div>

		<div class="inputDiv">
			<span class="inx"><span class="star">*</span>公司：</span>
			<input type="text" id="company" name="company">
		</div>

		<div class="inputDiv">
			<span class="inx"><span class="star">*</span>职务：</span>
			<input type="text" id="job" name="job">
		</div>

		<div class="inputDiv">
			<span  class="inx"><span class="star">*</span>地址：</span>
			<input type="text" id="position" name="position" placeholder="请输入公司所在地址">
		</div>

		<div class="inputDiv" style="width:574px;">
			<span style="width:150px;"class="inx"><span class="star">*</span>验证码：</span>
			<input type="text" id="imgVftNum" name="imgVftNum" style="width:200px;" maxlength="4" onkeyup="this.value = this.value.replace(/[^0-9]/g, '')">
			<img src="/index.php/Index/About/verify_c" alt="" class="vft_icon" title="点击刷新" onclick="this.src = '/index.php/Index/About/verify_c';"style="margin-left: 10px;">
		</div>
	</form>

	<div class="submit">
		<span>提交</span>
	</div>
	<p class="sumbit_tip">提交完成后，后续我们将与您取得联系，指引您完成报名事宜</p>
</body>
<script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERY_JS_URL); ?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_LIB_LAYER_JS_URL); ?>layer.js"></script>
<script>
    var index;
    // 关于我们
    $(".tabDiv_tab").on("click", function () {
        index = $(this).index();
        $(this).addClass('tabActive').siblings().removeClass('tabActive');
        $(".bgDiv div").eq(index).show().siblings().hide();
        $(".tabContent").eq(index).show().siblings().hide();
    })

    window.onload = function () {
        var urlStr = location.href;
        console.log(urlStr);
        if (urlStr.indexOf('n=3') > -1 && urlStr.indexOf('n=3') != '') {
            $(".tabDiv_tab").click();
        } else {
            return;
        }
    }
    // 正则
    $(".submit").on("click", function () {
//        var tips = {
//            tip_content:"",
//            addtips:function(tip_content){
//                var node = '<div class="tip">'+tip_content+'</div>';
//                $('body').append(node);
//            }
//        }
//        var abc = $("input[name='sex']:checked").val();
        var data = {};
        var t = $('#formID').serializeArray();
        $.each(t, function () {
            data[this.name] = this.value;
        });

        if (data.name == "" || data.sex == "" || data.phone == "" || data.email == "" || data.company == "" || data.job == "" || data.position == ""||data.imgVftNum=="") {
            layer.msg('请把信息填写完整！', {icon: 7, time: 20000});
            return false;
        }
        // 判断姓名正则
        var name_reg = /^[\u4e00-\u9fa5]{0,}$/;
        if (!name_reg.test(data.name)) {
            layer.msg('请输入正确的姓名！', {icon: 7, time: 2000});
            return false;
        }

        // 判断电话正则
        var phone_reg = /^1[3|4|5|7|8]\d{9}$/;
        if (!phone_reg.test(data.phone)) {
            layer.msg('请输入正确的电话号码！', {icon: 7, time: 2000});
            return false;
        }

        // 判断邮箱正则
        var email_reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
        if (!email_reg.test(data.email)) {
            layer.msg('请输入正确的邮箱地址！', {icon: 7, time: 2000});
            return false;
        }

        layer.msg('资料提交中！', {icon: 7, time: 2000});

        $.post('enroll', data, function (ret) {
            if (ret=='1') {
                layer.msg('提交成功！', {icon: 1, time: 2000},function(){
                    window.location.href='http://u4384271.viewer.maka.im/k/U8IGPUK6';
                });
            }else if(ret=='0'){
                layer.msg('验证码错误！', {icon: 7, time: 1000});
                return false;
            }
            else {
                layer.msg('提交失败，请重新提交！', {icon: 7, time: 1000});
                return false;
            }
        },'json');


    })


</script>
</html>