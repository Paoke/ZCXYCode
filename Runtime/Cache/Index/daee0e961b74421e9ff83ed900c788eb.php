<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>中创学院 - 知行合一、创赢未来</title>
    <meta name="description"
          content="中创学院（China Institute of Innovation，CII）是一个探索未来、主动创新，培育创新产业领军人的学院；一个产学研政经媒各种资源整合，协同创新、合作共赢的平台；一个具有“创新、产业、国家、民族”情怀的学院。"/>
    <meta name="keywords" content="中创学院"/>
    <link rel="shortcut icon" href="<?php echo (INDEX_IMAGES_URL); ?>favicon.ico">
    <link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>common.css">
    <link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>aboutUs.css">
    <link rel="stylesheet" href="<?php echo (SITE_PUBLIC_URL); ?>Admin/lib/layer/2.1/skin/layer.css">
</head>
<body>
<img class="returnTop" src="<?php echo (INDEX_IMAGES_URL); ?>return_top.png" alt="">
<div class="navWrap">
    <div class="nav clear">
        <img class="logo fl" src="<?php echo (INDEX_IMAGES_URL); ?>logo.png" alt="">
        <ul class="nav_ul">
            <a href="/index.php/Index/Index/index" ><li>首页</li></a>
            <a href="/index.php/Index/Index/lesson"><li>课程</li></a>
            <a href="/index.php/Index/Teacher/teacher"><li>师资</li></a>
            <a href="/index.php/Index/Student/student"><li>学员</li></a>
            <a href="/index.php/Index/Case/cases"><li>案例</li></a>
            <a href="/index.php/Index/View/views"><li>视野</li></a>
            <a href="/index.php/Index/About/about"><li>关于</li></a>
        </ul>
    </div>
</div>

<div class="aboutTop">
    <div class="bgDiv">
        <?php if(is_array($arrData)): foreach($arrData as $k=>$vo): if($k == 0): ?><div class="about_bg" style="background: url(/Upload/<?php echo ($vo["banner"]); ?>)center center no-repeat;"></div>
                <?php else: ?>
                <div class="about_bg"
                     style="display:none;background: url(/Upload/<?php echo ($vo["banner"]); ?>)center center no-repeat;"></div><?php endif; endforeach; endif; ?>
    </div>

    <div class="tabDiv clear">
        <?php if(is_array($arrData)): foreach($arrData as $k=>$vo): if($k == 0): ?><div class="tabDiv_tab fl tabActive">
                    <span><?php echo ($vo["title"]); ?><span class="jt">》</span></span>
                    <p class="tab_introduce"><?php echo ($vo["introduce"]); ?></p>
                </div>
                <?php else: ?>
                <div class="tabDiv_tab fl">
                    <span><?php echo ($vo["title"]); ?><span class="jt">》</span></span>
                    <p class="tab_introduce"><?php echo ($vo["introduce"]); ?></p>
                </div><?php endif; endforeach; endif; ?>
    </div>

    <div class="contentWrap">
        <div class="tabContent" style="display:block;">
            <div class="a_class">
                <a href="/index.php/Index/Index/index">首页</a>
                <span> > </span>
                <a href="">关于</a>
                <span> > </span>
                <?php echo ($arrData[0]["title"]); ?>
            </div>
            <p class="tab_content_title"><?php echo ($arrData[0]["title"]); ?></p>
            <div class="edit_content">
                <?php echo ($arrData[0]["content"]); ?>
            </div>
        </div>

        <div class="tabContent">
            <div class="a_class">
                <a href="/index.php/Index/Index/index">首页</a>
                <span> > </span>
                <a href="">关于</a>
                <span> > </span>
                <?php echo ($arrData[1]["title"]); ?>
            </div>
            <p class="tab_content_title"><?php echo ($arrData[1]["title"]); ?></p>
            <div class="edit_content">
                <?php echo ($arrData[1]["content"]); ?>
            </div>
        </div>

        <div class="tabContent">
            <div class="a_class">
                <a href="/index.php/Index/Index/index">首页</a>
                <span> > </span>
                <a href="">关于</a>
                <span> > </span>
                <?php echo ($arrData[2]["title"]); ?>
            </div>
            <p class="tab_content_title"><?php echo ($arrData[2]["title"]); ?></p>
            <div><?php echo ($arrData[2]["content"]); ?></div>
        </div>

        <div class="tabContent">
            <div class="a_class">
                <a href="/index.php/Index/Index/index">首页</a>
                <span> > </span>
                <a href="">关于</a>
                <span> > </span>
                <?php echo ($arrData[3]["title"]); ?>
            </div>
            <p class="tab_content_title"><?php echo ($arrData[3]["title"]); ?></p>
            <form action="" id="formID">
                <div class="inputDiv">
                    <span class="inx"><span class="star">*</span>姓名：</span>
                    <input type="text" id="name" name="name">
                </div>

                <div class="inputDiv clear">
                    <span class="inx fl" style="display:inline-block;padding-top:5px;"><span
                            class="star">*</span>性别：</span>
                    <div class="fl">
                        <label><input id="man" style="margin-left:0" type="radio" name="sex"
                                      value="男"><span>男</span></label>
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
                    <span class="inx"><span class="star">*</span>公司名称：</span>
                    <input type="text" id="company" name="company">
                </div>

                <div class="inputDiv">
                    <span class="inx"><span class="star">*</span>职务：</span>
                    <input type="text" id="job" name="job">
                </div>

                <div class="inputDiv">
                    <span class="inx"><span class="star">*</span>公司地址：</span>
                    <input type="text" id="position" name="position">
                </div>

                <div class="inputDiv">
                    <span class="inx"><span class="star">*</span>验证码：</span>
                    <input type="text" id="imgVftNum" name="imgVftNum" style="width: 221px;" maxlength="4" onkeyup="this.value = this.value.replace(/[^0-9]/g, '')">
                    <img src="/index.php/Index/About/verify_c" alt="" class="vft_icon" title="点击刷新" onclick="this.src = '/index.php/Index/About/verify_c';"style="margin-left: 40px;">
                </div>
            </form>

            <div class="submit">
                <span>提交</span>
            </div>
            <p class="sumbit_tip">提交完成后，后续我们将与您取得联系，指引您完成报名事宜</p>

        </div>

    </div>

    <div class="footer">
    <div class="clear">
        <p class="fl">地址：广州市海珠区滨江东路550号中大创新谷</p>
        <p class="fr">工作时间：周一到周五 9:00-18:00</p>
    </div>
    <p class="footer-bottom">2016-2017 &copy中创学院 ALL Rights Reaerved.16070805</p>
</div>
</div>


</body>
<script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERY_JS_URL); ?>jquery.min.js"></script>
<script src="<?php echo (INDEX_JS_URL); ?>common.js"></script>
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
            layer.msg('请把信息填写完整！', {icon: 7, time: 2000});
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
                    window.location.href='/index.php/Index/About/about?n=3';
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