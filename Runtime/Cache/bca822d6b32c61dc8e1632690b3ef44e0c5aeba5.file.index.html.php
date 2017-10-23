<?php /* Smarty version Smarty-3.1.6, created on 2017-06-21 16:03:11
         compiled from "D:/xampp/htdocs/ZCXYCode/Index/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1637594a283fc4c0b3-66627715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bca822d6b32c61dc8e1632690b3ef44e0c5aeba5' => 
    array (
      0 => 'D:/xampp/htdocs/ZCXYCode/Index/View\\Index\\index.html',
      1 => 1498014017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1637594a283fc4c0b3-66627715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arrData' => 0,
    'arrCons' => 0,
    'arrGuest' => 0,
    'v' => 0,
    'v1' => 0,
    'arrSpot' => 0,
    'v2' => 0,
    'v3' => 0,
    'arrLink' => 0,
    'v4' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_594a283fe4fb2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594a283fe4fb2')) {function content_594a283fe4fb2($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>云珠沙龙TIC</title>
    <link rel="shortcut icon" href="<?php echo @INDEX_IMAGES_URL;?>
favicon.ico">
    <meta name="description" content="聚焦最具争议的商业创新"/>
    <meta name="keywords" content="创业沙龙，众扶平台，创新创业，科技，想象力，资本"/>
    <link rel="stylesheet" href="<?php echo @SITE_PUBLIC_URL;?>
Admin/lib/layer/2.1/skin/layer.css">
    <link rel="stylesheet" href="<?php echo @INDEX_CSS_URL;?>
jquery.fullPage.css">
    <link rel="stylesheet" href="<?php echo @INDEX_CSS_URL;?>
swiper.css">
    <link rel="stylesheet" href="<?php echo @INDEX_CSS_URL;?>
index.css">
    <link rel="stylesheet" href="<?php echo @INDEX_CSS_URL;?>
media.css">
    <style>
        .layui-layer-dialog .layui-layer-content {
            color: #000;
        }

    </style>
</head>
<body>
<div id="fp-nav">
    <ul></ul>
    <img class="QR_Code" src="<?php echo @INDEX_IMAGES_URL;?>
QR_Code.png" alt="">
</div>
<div id="dowebok">
    <div class="section bg1">
        <img class="bg1_img" src="<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['arrData']->value['banner'];?>
" alt="">
        <div class="bg1_watchBtn"
             onclick="javascript:window.location.href='<?php echo @__MODULE__;?>
/Conference/detail?coid=<?php echo $_smarty_tpl->tpl_vars['arrCons']->value[0]['coid'];?>
'">
            点击观看
        </div>
    </div>
    <div class="section bg2">
        <div class="scale">
            <p class="title">拟邀嘉宾</p>
            <div class="swiper-container" id="swiper-container1">
                <div class="swiper-wrapper">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrGuest']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <div class="swiper-slide">
                        <ul class="guestDiv">
                            <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>
                            <li>
                                <img src="<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v1']->value['listimg'];?>
" alt="">
                                <p class="guest_name"><?php echo $_smarty_tpl->tpl_vars['v1']->value['name'];?>
</p>
                                <p class="guest_position"><?php echo $_smarty_tpl->tpl_vars['v1']->value['job'];?>
</p>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div class="section bg3_zjxc">
        <div class="scale">
            <p class="title">直击现场</p>
            <div class="bg3Div div_hover">
                <img class="img_hover" src="<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['arrData']->value['spot1'];?>
" alt="">
                <div class="bg3Div_title">
                    <?php echo $_smarty_tpl->tpl_vars['arrData']->value['word1'];?>

                </div>
            </div>
            <div class="bg3Div2 clear">
                <div class="main3 fl div_hover" style="margin-left: 0;">
                    <img class="img_hover" src="<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['arrData']->value['spot2'];?>
" alt="">
                    <div class="bg3Div_title2">
                        <?php echo $_smarty_tpl->tpl_vars['arrData']->value['word2'];?>

                    </div>
                </div>
                <div class="main3 fl div_hover">
                    <img class="img_hover" src="<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['arrData']->value['spot3'];?>
" alt="">
                    <div class="bg3Div_title2">
                        <?php echo $_smarty_tpl->tpl_vars['arrData']->value['word3'];?>

                    </div>
                </div>
                <div class="main3 fl div_hover">
                    <img class="img_hover" src="<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['arrData']->value['spot4'];?>
" alt="">
                    <div class="bg3Div_title2">
                        <?php echo $_smarty_tpl->tpl_vars['arrData']->value['word4'];?>

                    </div>
                </div>
            </div>
            <a href="<?php echo @__MODULE__;?>
/Conference/spot?said=<?php echo $_smarty_tpl->tpl_vars['arrSpot']->value['said'];?>
" target="_blank">
                <div class="watchBtn">点击观看</div>
            </a>
        </div>
    </div>
    <div class="section bg3">
        <div class="sildeDiv clear">
            <img class="y2016 fl" src="<?php echo @INDEX_IMAGES_URL;?>
2017_01.png" alt="">
            <?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrCons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value){
$_smarty_tpl->tpl_vars['v2']->_loop = true;
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['v2']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['v2']->value['time']=='2017'){?>
            <a href="<?php echo @__MODULE__;?>
/Conference/detail?coid=<?php echo $_smarty_tpl->tpl_vars['v2']->value['coid'];?>
" target="_blank">
                <img class="sildeDiv_img1 fl" src="<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v2']->value['review_img1'];?>
" alt=""
                     onmouseover="changePic(this, '<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v2']->value['review_img2'];?>
');"
                     onmouseleave="changePic(this,'<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v2']->value['review_img1'];?>
');">
            </a>
            <?php }?>
            <?php } ?>
            <div class="close">
                <img src="<?php echo @INDEX_IMAGES_URL;?>
close.png" alt="">
            </div>
        </div>
        <div class="sildeDiv2 clear">
            <img class="y2016 fl" src="<?php echo @INDEX_IMAGES_URL;?>
2016_01.png" alt="">
            <?php  $_smarty_tpl->tpl_vars['v3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v3']->_loop = false;
 $_smarty_tpl->tpl_vars['k3'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrCons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v3']->key => $_smarty_tpl->tpl_vars['v3']->value){
$_smarty_tpl->tpl_vars['v3']->_loop = true;
 $_smarty_tpl->tpl_vars['k3']->value = $_smarty_tpl->tpl_vars['v3']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['v3']->value['time']=='2016'){?>
            <a href="<?php echo @__MODULE__;?>
/Conference/detail?coid=<?php echo $_smarty_tpl->tpl_vars['v3']->value['coid'];?>
" target="_blank">
                <img class="sildeDiv_img2 fl" src="<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v3']->value['review_img1'];?>
" alt=""
                     onmouseover="changePic(this, '<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v3']->value['review_img2'];?>
');"
                     onmouseleave="changePic(this,'<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v3']->value['review_img1'];?>
');">
            </a>
            <?php }?>
            <?php } ?>
            <div class="close2">
                <img src="<?php echo @INDEX_IMAGES_URL;?>
close.png" alt="">
            </div>
        </div>
        <p class="title">往期回顾</p>
        <div class="bg_2017" style="opacity: 0;"></div>
        <div class="bg_2016" style="opacity: 0;"></div>
        <div class="location clear">
            <img class="review_img1 fl" src="<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['arrData']->value['review1'];?>
" alt="">
            <img class="review_img2 fr" src="<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['arrData']->value['review2'];?>
" alt="">
        </div>
        <div class="yearDiv clear">
            <div class="fl">
                <p class="year1">2017</p>
                <div class="line1"></div>
            </div>
            <div class="fr" style="margin-left:40px">
                <p class="year2">2016</p>
                <div class="line2"></div>
            </div>
        </div>
    </div>
    <div class="section bg4">
        <!-- 第四屏滑入部分 -->
        <!-- 赞助咨询 -->
        <div class="bg4_sildeDiv1 clear">
            <img class="media_close1" src="<?php echo @INDEX_IMAGES_URL;?>
bg4_close.png" alt="">
            <div class="media_input">
                <p class="media_p">TIC跨界创新大会赞助&咨询</p>
                <div class="_inp clear">
                    <span class="_inp_span fl">真实姓名</span>
                    <input class="inp_input fl" type="text" id="name" name="name" placeholder="请输入您的姓名">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">手机号码</span>
                    <input class="inp_input fl" type="text" id="phone" name="phone" placeholder="请输入您的电话号码">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">电子邮箱</span>
                    <input class="inp_input fl" type="text" id="email" name="email" placeholder="请输入您的邮箱地址">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">职 &nbsp; &nbsp; &nbsp;  位</span>
                    <input class="inp_input fl" type="text" id="job" name="job" placeholder="请输入您的公司职位">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">公司名称</span>
                    <input class="inp_input fl" type="text" id="company" name="company" placeholder="请输入您的公司名称">
                </div>
            </div>
            <div class="radioDiv">
                <p class="radioDiv_p">您感兴趣的参与方式？</p>
                <form action="" method="get">
                    <label><input type="radio" name="join" value="成为大会赞助商"> 成为大会赞助商</label><br>
                    <label><input type="radio" name="join" value="成为专场赞助商"> 成为专场赞助商</label><br>
                    <label><input type="radio" name="join" value="成为大会展商"> 成为大会展商</label><br>
                    <label><input type="radio" name="join" value="购票参会"> 购票参会</label><br>
                </form>
            </div>
            <div class="submit-btn1">提交</div>
        </div>
        <!-- 媒体申请 -->
        <div class="bg4_sildeDiv2 clear">
            <img class="media_close2" src="<?php echo @INDEX_IMAGES_URL;?>
bg4_close.png" alt="">
            <div class="media_input">
                <p class="media_p">TIC跨界创新大会媒体申请</p>
                <div class="_inp clear">
                    <span class="_inp_span fl">真实姓名</span>
                    <input class="inp_input fl" id="name1" name="name1" type="text" placeholder="请输入您的姓名">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">手机号码</span>
                    <input class="inp_input fl" id="phone1" name="phone1" type="text" placeholder="请输入您的电话号码">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">电子邮箱</span>
                    <input class="inp_input fl" id="email1" name="email1" type="text" placeholder="请输入您的邮箱地址">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">职  位</span>
                    <input class="inp_input fl" id="job1" name="job1" type="text" placeholder="请输入您的公司职位">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">公司名称</span>
                    <input class="inp_input fl" id="company1" name="company1" type="text" placeholder="请输入您的公司名称">
                </div>
            </div>
            <div class="fileDiv clear">
                <input type="hidden" class="credential">
                <input class="_hidden" type="file" id="credential" name="credential">
                <p class="fileDiv_span fl">上传证件</p>
                <p class="file fl">选择照片</p>
            </div>
            <p class="support-pic">支持JPG、PNG图片格式，招聘大小不超过5M</p>
            <div class="submit-btn2">
                提交
            </div>
        </div>
        <!-- 演讲申请 -->
        <div class="bg4_sildeDiv3 clear">
            <img class="media_close3" src="<?php echo @INDEX_IMAGES_URL;?>
bg4_close.png" alt="">
            <div class="media_input">
                <p class="media_p">TIC跨界创新大会演讲申请</p>
                <div class="_inp clear">
                    <span class="_inp_span fl">真实姓名</span>
                    <input class="inp_input fl" id="name2" name="name2" type="text" placeholder="请输入您的姓名">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">手机号码</span>
                    <input class="inp_input fl" id="phone2" name="phone2" type="text" placeholder="请输入您的电话号码">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">电子邮箱</span>
                    <input class="inp_input fl" id="email2" name="email2" type="text" placeholder="请输入您的邮箱地址">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">职  位</span>
                    <input class="inp_input fl" id="job2" name="job2" type="text" placeholder="请输入您的公司职位">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">公司名称</span>
                    <input class="inp_input fl" id="company2" name="company2" type="text" placeholder="请输入您的公司名称">
                </div>
            </div>
            <textarea class="_tex" id="introduce2" name="introduce2" cols="30" rows="10" placeholder="演讲者简介"></textarea>
            <div class="submit-btn3">
                提交
            </div>
        </div>
        <!-- 志愿者申请 -->
        <div class="bg4_sildeDiv4 clear">
            <img class="media_close4" src="<?php echo @INDEX_IMAGES_URL;?>
bg4_close.png" alt="">
            <div class="media_input">
                <p class="media_p">TIC跨界创新大会志愿者申请</p>
                <div class="_inp clear">
                    <span class="_inp_span fl">真实姓名</span>
                    <input class="inp_input fl" id="name3" name="name3" type="text" placeholder="请输入您的姓名">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">手机号码</span>
                    <input class="inp_input fl" id="phone3" name="phone3" type="text" placeholder="请输入您的电话号码">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">电子邮箱</span>
                    <input class="inp_input fl" id="email3" name="email3" type="text" placeholder="请输入您的邮箱地址">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">微信号码</span>
                    <input class="inp_input fl" id="wechat3" name="wechat3" type="text" placeholder="请输入您的微信号">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">公司/学校</span>
                    <input class="inp_input fl" id="com_sch3" name="com_sch3" type="text" placeholder="请输入您的公司名称或学校">
                </div>
                <div class="_inp clear">
                    <span class="_inp_span fl">职位/专业</span>
                    <input class="inp_input fl" id="job3" name="job3" type="text" placeholder="请输入您的职位或专业">
                </div>
            </div>
            <div class="submit-btn4">
                提交
            </div>
        </div>
        <!-- 第四屏板块 -->
        <p class="title">合作申请</p>
        <div class="clear mainDiv">
            <div class="fl main">
                <p class="support">赞助咨询</p>
            </div>
            <div class="fr main">
                <p class="media_apply">媒体申请</p>
            </div>
            <div class="fl main" style="margin-top: 62px;">
                <p class="speech_apply">演讲申请</p>
            </div>
            <div class="fr main" style="margin-top: 62px;">
                <p class="volunteer_apply">志愿者申请</p>
            </div>
        </div>
    </div>
    <div class="section bg5">
        <div class="scale">
            <p class="title">主办方介绍</p>
            <p class="introduce">
                <?php echo $_smarty_tpl->tpl_vars['arrData']->value['introduce'];?>

            </p>
            <div class="clear aboutUsDiv">
                <?php  $_smarty_tpl->tpl_vars['v4'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v4']->_loop = false;
 $_smarty_tpl->tpl_vars['k4'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrLink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v4']->key => $_smarty_tpl->tpl_vars['v4']->value){
$_smarty_tpl->tpl_vars['v4']->_loop = true;
 $_smarty_tpl->tpl_vars['k4']->value = $_smarty_tpl->tpl_vars['v4']->key;
?>
                <div class="fl aboutDiv">
                    <img src="<?php echo @PUBLIC_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v4']->value['picture'];?>
" alt="">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['v4']->value['link'];?>
" target="_blank"><p class="about_tit"><?php echo $_smarty_tpl->tpl_vars['v4']->value['explain'];?>
</p></a>
                    <div class="clear" style="margin-top:20px;">
                        <div class="line fl"></div>
                        <p class="fl about_word"><?php echo $_smarty_tpl->tpl_vars['v4']->value['source'];?>
</p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="watchBtn" onclick="javascript:window.location.href='/index.php/Index/Cooperation/about'">点击观看
            </div>
            <div class="bottom clear">
                <img class="fl" src="<?php echo @INDEX_IMAGES_URL;?>
logo.png" alt="">
                <div class="bottom-center fl">
                    <span>广东省广州市海珠区滨江东路548-1号中大创新谷</span><br>
                    <span class="bottom-span">info@yunzhuslon.com</span><br>
                    <span class="bottom-span">Copyright ©tic All rights reserved 粤ICP备15008101号-1</span>
                </div>
                <div class="bottom-right fr">
                    <span>联系电话</span><br>
                    <span class="bottom-span">020-84043453</span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="<?php echo @INDEX_JS_URL;?>
jquery-3.0.0.min.js"></script>
<script src="<?php echo @INDEX_JS_URL;?>
jquery.fullPage.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.form.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_LAYER_JS_URL;?>
layer.js"></script>
<script src="<?php echo @INDEX_JS_URL;?>
swiper.js"></script>
<script src="<?php echo @INDEX_JS_URL;?>
index.js"></script>

<script>
    $("ul li:nth-child(1)").css("margin-left", "0px");
    $("ul li:nth-child(6)").css("margin-left", "0px");
    $(".aboutUsDiv").children("div").eq(0).css("margin-left", "0px");
    $(function () {
        $('#dowebok').fullpage({
            // sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', '#f90'],
            'navigation': true,
            // 添加一个pname，传入导航条内容
            'pname': ["首页", "拟邀嘉宾", "直击现场", "往期回顾", "合作申请", "关于<br>主办方", "返回顶部"],
        });
    });
</script>
</html><?php }} ?>