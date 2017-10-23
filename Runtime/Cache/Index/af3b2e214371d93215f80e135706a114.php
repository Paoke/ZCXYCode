<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中创学院 - 知行合一、创赢未来</title>
	<meta name="description" content="中创学院（China Institute of Innovation，CII）是一个探索未来、主动创新，培育创新产业领军人的学院；一个产学研政经媒各种资源整合，协同创新、合作共赢的平台；一个具有“创新、产业、国家、民族”情怀的学院。" />   
	<meta name="keywords" content="中创学院" /> 
	<link rel="shortcut icon" href="<?php echo (INDEX_IMAGES_URL); ?>favicon.ico">
	<link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>lesson.css">
	<link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>common.css">
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


	<div class="banner">
		<p class="h2"><?php echo session('word')[0]['title'] ?></p>
		<p><?php echo session('word')[0]['content'] ?></p>
	</div>
	<div class="content">
		<h1>医疗产业领军班课程</h1>
		<div class="main clear">
			<div class="fl introduce">
				<h4>运营管理</h4>
				<p>医疗器械产业概述</p>
				<p>医疗器械企业营销管理</p>
				<p>渠道公司如何向上游转型</p>
				<p>医药如何向器械转型</p>
				<p>医疗器械研发管理</p>
				<p>医疗器械生产质量管理规范</p>
			</div>
			<div class="fr introImg" style="background:url(<?php echo (INDEX_IMAGES_URL); ?>lesson1.png) center center no-repeat;">
				<div class="jtl"></div>
			</div>
		</div>
		<div class="main clear">
			<div class="fl introImg" style="background:url(<?php echo (INDEX_IMAGES_URL); ?>lesson2.png) center center no-repeat;">
				<div class="jtr"></div>
			</div>
			<div class="fr introduce">
				<h4>政策与监督</h4>
				<p>国家医疗体制改革分析</p>
				<p>中国医保政策分析</p>
				<p>医疗政策下企业如何应对</p>
				<p>代理商角色在新政策下的转换</p>
				<p>中美医疗器械监管异同与医疗创新</p>
				<p>诊断试剂与医疗器械招标与物价管理</p>
			</div>
		</div>
		<div class="main clear">
			<div class="fl introduce">
				<h4>投融资与并购</h4>
				<p>市场资产配置</p>
				<p>宏观经济分析</p>
				<p>医疗器械投资概述</p>
				<p>诊断试剂行业投资概述</p>
				<p>中国医疗器械行业并购市场分析</p>
				<p>国际医疗器械行业并购市场分析</p>
				<p>医疗器械行业融资市场</p>
				<p>创新金融服务对医疗器械行业的支持</p>
			</div>
			<div class="fr introImg" style="background:url(<?php echo (INDEX_IMAGES_URL); ?>lesson3.png) center center no-repeat;">
				<div class="jtl"></div>
			</div>
		</div>
		<div class="main clear">
			<div class="fl introImg" style="background:url(<?php echo (INDEX_IMAGES_URL); ?>lesson4.png) center center no-repeat;">
				<div class="jtr"></div>
			</div>
			<div class="fr introduce">
				<h4>医院管理</h4>
				<p>医院运营管理</p>
				<p>医院财务管理</p>
				<p>医院质量控制</p>
				<p>医院流程优化</p>
				<p>医院器械使用与管理</p>
				<p>转化医学事业下的医疗器械创新</p>
			</div>
		</div>
		<div class="main clear">
			<div class="fl introduce">
				<h4>产业升级</h4>
				<p>医疗器械产业概述</p>
				<p>渠道公司向上游转型</p>
				<p>产业思维构建健康小镇</p>
				<p>医美行业成功转型经验</p>
				<p>从营养学看健康管理</p>
				<p>医药企业转型</p>
			</div>
			<div class="fr introImg" style="background:url(<?php echo (INDEX_IMAGES_URL); ?>lesson5.png) center center no-repeat;">
				<div class="jtl"></div>
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
<script src="<?php echo (INDEX_JS_URL); ?>jquery-3.0.0.min.js"></script>
<script src="<?php echo (INDEX_JS_URL); ?>common.js"></script>
</html>