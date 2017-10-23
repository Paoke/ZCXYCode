<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中创学院 - 知行合一、创赢未来</title>
	<meta name="description" content="中创学院（China Institute of Innovation，CII）是一个探索未来、主动创新，培育创新产业领军人的学院；一个产学研政经媒各种资源整合，协同创新、合作共赢的平台；一个具有“创新、产业、国家、民族”情怀的学院。" />   
	<meta name="keywords" content="中创学院" /> 
	<link rel="shortcut icon" href="<?php echo (INDEX_IMAGES_URL); ?>favicon.ico">
	<link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>common.css">
	<link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>index.css">
	<link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>swiper1.css">
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



	<img src="<?php echo (INDEX_IMAGES_URL); ?>search.png" style="display:none;" alt="<?php echo (INDEX_IMAGES_URL); ?>search.png">
		<div class="index_banner">
			<div class="swiper-container">
			  <div class="swiper-wrapper">
				  <?php if(is_array($arrBanner)): foreach($arrBanner as $k=>$vo): ?><div class="swiper-slide"><img src="<?php echo (PUBLIC_UPLOAD); echo ($vo["img"]); ?>" alt=""></div><?php endforeach; endif; ?>
			  </div>
				<div class="swiper-pagination"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
			
		</div>


		<div class="front-news">
		    <div class="news-list wrapper">    
		    	<ul>
					<?php if(is_array($arrView)): foreach($arrView as $k=>$vo): ?><li class="">
						   <a href="/index.php/Index/View/detail?vied=<?php echo ($vo["vied"]); ?>" target="_blank">
								<span class="news-date"><?php echo ($vo['times'][2]); ?>/<?php echo ($vo['times'][1]); ?><small><?php echo ($vo['times'][0]); ?></small></span>
								<span class="news-section"><?php echo ($vo["title"]); ?></span>
								<span class="news-author">
									<?php if($vo["class"] == 1): ?><img src="<?php echo (INDEX_IMAGES_URL); ?>news1.png" width="72" height="72" alt="">学院动态
									<?php elseif($vo["class"] == 2): ?>
										<img src="<?php echo (INDEX_IMAGES_URL); ?>news2.png" width="72" height="72" alt="">产业智库
									<?php else: ?>
										<img src="<?php echo (INDEX_IMAGES_URL); ?>news3.png" width="72" height="72" alt="">时事热点<?php endif; ?>
								</span>
								<span class="news-bline"></span>
								<span class="news-img"><img src="<?php echo (PUBLIC_UPLOAD); echo ($vo["indeximg"]); ?>"></span>
							</a>
						</li><?php endforeach; endif; ?>
		  		</ul>
				<a href="/index.php/Index/View/views" style="height:46px"><div class="moreSight">更多视野</div></a>
		  	</div>   
		</div>



		<div class="kind">
			<p class="comTie">培养扶持世界一流的医疗产业领袖</p>
			<div class="clear">
				<div class="part fl">
					<div class="mask"></div>
					<img class="part_bg" src="<?php echo (INDEX_IMAGES_URL); ?>px1.png" alt="">
					<div class="content">
						<img class="icon" src="<?php echo (INDEX_IMAGES_URL); ?>icon1.png" alt="">
						<p class="title">运营管理</p>
						<p class="describe">全方位解析医疗产业问题与发展，提供专业的企业运营指导</p>
					</div>
				</div>
				<div class="part fl">
					<div class="mask"></div>
					<img class="part_bg" src="<?php echo (INDEX_IMAGES_URL); ?>px2.png" alt="">
					<div class="content">
						<img class="icon" src="<?php echo (INDEX_IMAGES_URL); ?>icon2.png" alt="">
						<p class="title">政策与监管</p>
						<p class="describe">了解行业前沿政策，及时作出应对和角色转换</p>
					</div>
				</div>
				<div class="part fl">
					<div class="mask"></div>
					<img class="part_bg" src="<?php echo (INDEX_IMAGES_URL); ?>px3.png" alt="">
					<div class="content">
						<img class="icon" src="<?php echo (INDEX_IMAGES_URL); ?>icon3.png" alt="">
						<p class="title">投融资与并购</p>
						<p class="describe">依托专业投融资机构，培养全球化投资视野，结合本土化投资实践</p>
					</div>
				</div>
				<div class="part fl">
					<div class="mask"></div>
					<img class="part_bg" src="<?php echo (INDEX_IMAGES_URL); ?>px4.png" alt="">
					<div class="content">
						<img class="icon" src="<?php echo (INDEX_IMAGES_URL); ?>icon4.png" alt="">
						<p class="title">医院管理</p>
						<p class="describe">听中国最好的医院管理专家讲述医院管理经验</p>
					</div>
				</div>
			</div>
		</div>
		

		<div class="people">
			<p class="comTie">携手共进，同创未来</p>
			<div class="clear">
				<?php if(is_array($arrTeacher)): foreach($arrTeacher as $k=>$vo): ?><div class="peoIntro fl">
						<img src="<?php echo (PUBLIC_UPLOAD); echo ($vo["header"]); ?>" alt="">
						<p class="name"><?php echo ($vo["name"]); ?></p>
						<p class="job"><?php echo ($vo["job"]); ?></p>
					</div><?php endforeach; endif; ?>
			</div>
			<a href="/index.php/Index/Teacher/teacher" style="height:0;"><div class="moreSight"><span>更多导师</span></div></a>
		</div>

		
		
		<div class="people">
			<p class="comTie">我们的办公地点</p>
			<div class="clear" style="margin-bottom:56px;">
				<a target="_blank" href="http://map.baidu.com/?newmap=1&ie=utf-8&s=s%26wd%3D中大创新谷">
					<div class="mapDiv fl">
						<img class="dz" src="<?php echo (INDEX_IMAGES_URL); ?>dz1.png" alt="">
						<img class="map" src="<?php echo (INDEX_IMAGES_URL); ?>map1.png" alt="">
						<p class="addressName">广州</p>
					</div>
				</a>
				<a target="_blank" href="http://map.baidu.com/?newmap=1&ie=utf-8&s=s%26wd%3D珠海市平沙镇平东大道2233号">
					<div class="mapDiv fl">
						<img class="dz" src="<?php echo (INDEX_IMAGES_URL); ?>dz2.png" alt="">
						<img class="map" src="<?php echo (INDEX_IMAGES_URL); ?>map2.png" alt="">
						<p class="addressName">上海</p>
					</div>
				</a>
				<a target="_blank" href="http://map.baidu.com/?newmap=1&ie=utf-8&s=s%26wd%3D杨浦区国权北路1688弄23号">
					<div class="mapDiv fl" style="margin-right: 0;">
						<img class="dz" src="<?php echo (INDEX_IMAGES_URL); ?>dz3.png" alt="">
						<img class="map" src="<?php echo (INDEX_IMAGES_URL); ?>map3.png" alt="">
						<p class="addressName">珠海</p>
					</div>
				</a>
			</div>
		</div>			
		

		<div class="people">
			<p class="comTie">欢迎联系我们</p>
			<div class="iconDiv clear">
				<div class="fl iconDiv_icon" style="margin-left:0">
					<img class="icon_show" src="<?php echo (INDEX_IMAGES_URL); ?>contack-qq.png" alt="">
					<img class="icon_hide"src="<?php echo (INDEX_IMAGES_URL); ?>contack-qq2.png" alt="">
					<p>2864830353</p>
				</div>
				<div class="fl iconDiv_icon">
					<img class="icon_hover" src="<?php echo (INDEX_IMAGES_URL); ?>contack-qr.png" alt="">
					<img class="icon_show" src="<?php echo (INDEX_IMAGES_URL); ?>contack-wx.png" alt="">
					<img class="icon_hide"src="<?php echo (INDEX_IMAGES_URL); ?>contack-wx2.png" alt="">
					<p>微信公众号</p>
				</div>
				<div class="fl iconDiv_icon">
					<img class="icon_hover" src="<?php echo (INDEX_IMAGES_URL); ?>contack-num.png" alt="">
					<img class="icon_show" src="<?php echo (INDEX_IMAGES_URL); ?>contack-phone.png" alt="">
					<img class="icon_hide"src="<?php echo (INDEX_IMAGES_URL); ?>contack-phone2.png" alt="">
					<p>咨询电话</p>
				</div>
				<div class="fl iconDiv_icon">
					<img class="icon_show" src="<?php echo (INDEX_IMAGES_URL); ?>contack-em.png" alt="">
					<img class="icon_hide"src="<?php echo (INDEX_IMAGES_URL); ?>contack-em2.png" alt="">
					<p>zcxy@chinacii.cn</p>
				</div>
			</div>
		</div>


		<div class="bottomBg">
			<p class="bottom_intro">中创学院，一个探索未来、主动创新、培育创新产业领军人的学院<br>期待您的加入，与君共创未来</p>
			<p class="apply">申请入读</p>
		</div>
		<div class="footer">
    <div class="clear">
        <p class="fl">地址：广州市海珠区滨江东路550号中大创新谷</p>
        <p class="fr">工作时间：周一到周五 9:00-18:00</p>
    </div>
    <p class="footer-bottom">2016-2017 &copy中创学院 ALL Rights Reaerved.16070805</p>
</div>


	<!--</div>-->


</body>
<script src='<?php echo (INDEX_JS_URL); ?>jquery-3.0.0.min.js'></script>
<script src="<?php echo (INDEX_JS_URL); ?>three.min.js"></script>
<script src='<?php echo (INDEX_JS_URL); ?>swiper.js'></script>
<script src="<?php echo (INDEX_JS_URL); ?>common.js"></script>
<!--<script src="<?php echo (INDEX_JS_URL); ?>canvas.js"></script>-->

<script>
	var mySwiper = new Swiper('.swiper-container', {
        autoplay: 5000,//可选选项，自动滑动
		loop:true,
        pagination : '.swiper-pagination',
        prevButton:'.swiper-button-prev',
        nextButton:'.swiper-button-next',
    })
//	//  // 刷新页面回到顶部
//    // 刷新页面回到顶部
//    $(document).ready(function(){
//        $(".navWrap").css("background"," #eee");
//        $(window).scrollTop(0);
//    })
//    // jquery 兼容的滚轮事件
//    $(window).bind("mousewheel DOMMouseScroll", function (event) {
//        var scroll_top = $(document).scrollTop();
//        console.log(scroll_top);
//        var event = event || window.event;
//        var delta = (event.originalEvent.wheelDelta && (event.originalEvent.wheelDelta > 0 ? 1 : -1)) ||  // chrome & ie
//            (event.originalEvent.detail && (event.originalEvent.detail > 0 ? -1 : 1));              // firefox
//        //判断向上滚动且滚动到顶部
//        if (delta > 0&&scroll_top<=0) {
//            // 向上滚
//            $(".keyscroll").show();
//            $(".navWrap").css("background"," #eee");
//            $('.p-canvas-webgl').css("transform","translate3d(0,0,0)");
//            $('.wrap').css("position","fixed");
//            console.log("wheelup");
//
//        } else if (delta < 0) {
//            // 向下滚
//            // 点击向下按钮中执行此段代码
//            $(".keyscroll").hide();
//            $('.p-canvas-webgl').css("transform","translate3d(0,-100%,0)");
//            console.log("wheeldown");
//            cleart = setTimeout(function(){
//                $(".navWrap").css("background","#fff");
//                $('.wrap').css("position","static");
//            },500)
//
//        }
//    });
//    $(".keyscroll").on("click",function(){
//        $(".keyscroll").hide();
//        $('.p-canvas-webgl').css("transform","translate3d(0,-100%,0)");
//        console.log("wheeldown");
//        cleart = setTimeout(function(){
//            $(".navWrap").css("background","#fff");
//            $('.wrap').css("position","static");
//        },500)
//    });
 </script>
<script>
    $('.navWrap .nav a').eq(0).addClass('active');
</script>
</html>