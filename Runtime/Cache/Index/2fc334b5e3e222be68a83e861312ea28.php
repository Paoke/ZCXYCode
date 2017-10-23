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
    <link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>vision.css">
    <style>
        .footer-bottom{
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
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

<div class="main clear">
    <div class="fl" style="width:820px;background:#fff;padding:0 36px 36px;margin-bottom: 30px;">
        <h4><?php echo ($arrData["title"]); ?></h4>
        <span class="classify" style="margin-left:180px; color:#022ab2;">
                <?php if($arrData["class"] == 1): ?>学院动态
				<?php elseif($arrData["class"] == 2): ?>产业智库
				<?php else: ?>时事热点<?php endif; ?>
        </span>
        <span class="pubishTime" style="color:#999">时间：2017-05-13</span><span style="color:#999">作者：<?php echo ($arrData["author"]); ?></span>
        <span style="margin-left:42px;color:#999">来源：<?php echo ($arrData["from"]); ?></span>
        <div class="line" style="color:#999"></div>
        <?php echo ($arrData["content"]); ?>
    </div>

    <div class="fr">
        <div class="hotNews clear">
            <div class="fl con"></div>
            <span class="fl">热门资讯</span>
        </div>

        <?php if(is_array($arrRelated)): foreach($arrRelated as $k=>$vo): ?><a href="/index.php/Index/View/detail?vied=<?php echo ($vo["vied"]); ?>">
                <div class="secion">
                    <img src="<?php echo (PUBLIC_UPLOAD); echo ($vo["thumbimg"]); ?>" alt="" width="232px" height="132px">
                    <p class="word"><?php echo ($vo["title"]); ?></p>
                    <p class="time">发布时间：<?php echo ($vo["time"]); ?></p>
                </div>
            </a><?php endforeach; endif; ?>

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
<script src="<?php echo (INDEX_JS_URL); ?>jquery-3.0.0.min.js"></script>
<script src="<?php echo (INDEX_JS_URL); ?>common.js"></script>
<script>
    $('.navWrap .nav a').eq(5).addClass('active');
</script>

</html>