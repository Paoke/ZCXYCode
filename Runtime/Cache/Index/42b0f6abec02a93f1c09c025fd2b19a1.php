<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中创学院 - 知行合一、创赢未来</title>
	<meta name="description" content="中创学院（China Institute of Innovation，CII）是一个探索未来、主动创新，培育创新产业领军人的学院；一个产学研政经媒各种资源整合，协同创新、合作共赢的平台；一个具有“创新、产业、国家、民族”情怀的学院。" />   
	<meta name="keywords" content="中创学院" /> 
	<link rel="shortcut icon" href="<?php echo (INDEX_IMAGES_URL); ?>favicon.ico">
	<link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>common.css">
	<link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>vision.css">
</head>
<body style="background:#fff;">

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


	<input type="hidden" value="2" class="page" id="page" name="page">
	<input type="hidden" value="<?php echo ($arrPage["intPageCount"]); ?>" class="intPageCount">
	<div class="banner">
		<p class="h2"><?php echo session('word')[3]['title'] ?></p>
		<p style="max-width: 900px;"><?php echo session('word')[3]['content'] ?></p>
	</div>
	<div class="case_main">
		<p class="title">课程案例</p>
		<div class="clear cc">
			<?php if(is_array($arrData)): foreach($arrData as $k=>$vo): ?><a class="_a fl" href="/index.php/Index/Case/detail?caid=<?php echo ($vo["caid"]); ?>" target="_blank">
					<div class="section">
						<div class="sec_top">
							<img src="<?php echo (PUBLIC_UPLOAD); echo ($vo["thumbimg"]); ?>" alt="">
							<div class="intro">
								<p class="name"><?php echo ($vo["speaker"]); ?></p>
								<p class="pstion"><?php echo ($vo["job"]); ?></p>
								<div class="progress"></div>
							</div>
						</div>
						<p class="dec"><?php echo ($vo["title"]); ?></p>
						<div class="clear">
							<span class="fl"><?php echo ($vo["time"]); ?></span>
							<span class="fr"><?php echo ($vo["position"]); ?></span>
						</div>
					</div>
				</a><?php endforeach; endif; ?>
		</div>
	</div>
<div class="footer">
    <div class="clear">
        <p class="fl">地址：广州市海珠区滨江东路550号中大创新谷</p>
        <p class="fr">工作时间：周一到周五 9:00-18:00</p>
    </div>
    <p class="footer-bottom">2016-2017 &copy中创学院 ALL Rights Reaerved.16070805</p>
</div>

</body>
<script src="<?php echo (INDEX_JS_URL); ?>jquery-3.0.0.min.js"></script>
<script src="<?php echo (INDEX_JS_URL); ?>common.js"></script>
<script>
	/*滚动加载*/
    $(window).scroll(function () {
        if ($(document).scrollTop() > ($(document).height() - $(window).height()) / 1.5) {
            var page1 = GetQueryString('page');

            if (page1 != null && page1 != '2') {
                return false;
            }
            var page = $("#page").val();
            var intPageCount = $('.intPageCount').val();
            if (page <= intPageCount) {
                $("#page").val((parseInt(page) + 1));
                var data = {page: page};
                $.post('more', data, function (ret) {
                    var json = JSON.parse(ret);
                    var code = "";
                    for (var i = 0; i < json.length; i++) {
                        code=code+'<a class="_a fl" href="/index.php/Index/Case/detail?caid='+json[i].caid+'" target="_blank">'+
                            '<div class="section">'+
                            '<div class="sec_top">'+
                            '<img src="/Upload/'+json[i].thumbimg+'" alt="">'+
                            '<div class="intro">'+
                            '<p class="name">'+json[i].speaker+'</p>'+
                        	'<p class="pstion">'+json[i].job+'</p>'+
                        	'<div class="progress"></div>'+
                            '</div>'+
                            '</div>'+
                            '<p class="dec">'+json[i].title+'</p>'+
                        	'<div class="clear">'+
                            '<span class="fl">'+json[i].time+'</span>'+
                        	'<span class="fr">'+json[i].position+'</span>'+
                        	'</div>'+
							'</div>'+
							'</a>';
                    }
                    $('.cc').append(code);
                }, 'json');
            } else {
                return false;
            }
        }
    });
</script>
</html>