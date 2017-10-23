// 导航栏高亮
var urlStr = location.href;   
$(".navWrap .nav a").each(function () {  
  if ((urlStr + '/').indexOf($(this).attr('href')) > -1&&$(this).attr('href')!='') {  
    $(this).addClass('active'); 
  } else {  
    $(this).removeClass('active');  
  }  
}); 

// vision.html   tab切换
$(".title li").on("click",function(){
	var index = $(this).index();
	var index1=index+1;
	var content=$('#tabContent'+index1).html();
	if(index!=0) {
        if (content == "" || content == null || content.length == 0) {
            $.post('/index.php/Index/View/group?class=' + index, function (ret) {
                var json = JSON.parse(ret);
                var code = "";
                for (var i = 0; i < json.length; i++) {
                    code = code + '<div class="content clear">' +
                        '<div class="fl">' +
                        '<img src="/Upload/' + json[i].thumbimg + '" alt="" width="243px" height="182px">' +
                        '</div>' +
                        '<div class="article fl">' +
                        '<a href="/index.php/Index/View/detail?vied='+json[i].vied+'" target="_blank"><p class="article_title">' + json[i].title + '</p></a>' +
                        '<p class="describe">' + json[i].describe + '...</p>' +
                        '<div class="clear">' +
                        '<span class="pubishTime fl">发布时间：' + json[i].time + '</span>' +
                        '<span class="classify fr">' + json[i].classname + '</span>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                }
                $('#tabContent' + index1).append(code);
            }, 'json');
        } else {

        }
    }
	var left = index*150+49;
	if(index == 3){
		left = 503;
	}
	$(".main .tab .sideDiv").css("left",left);
	$(this).css("color","#022ab2").siblings().css("color","#333");
	$(".main .tab .tabContent").eq(index).show().siblings(".tabContent").hide();
})

// 首页

$(".kind .part").on("mouseenter",function(){
	$(this).find(".content").css("transform","translateY(-24px)");
	$(this).find(".mask").animate({"opacity":0.7},500);
	$(this).find(".describe").animate({"opacity":1},500);
	$(this).find(".title").animate({"color":"red"},500);	
})
$(".kind .part").on("mouseleave",function(){
	$(this).find(".content").css("transform","translateY(0)");
	$(this).find(".mask").animate({"opacity":0},500);
	$(this).find(".describe").animate({"opacity":0},500);
	$(this).find(".title").animate({"color":"yellow"},500);
})

$(".mapDiv").hover(function() {
	$(this).find(".dz").animate({"opacity":0},200);
	$(this).find(".map").animate({"opacity":1},200);
	$(this).find(".addressName").css({"background":"-webkit-linear-gradient(left,#2182ff,#001a72)","color":"#fff"});
}, function() {
	$(this).find(".dz").animate({"opacity":1},200);
	$(this).find(".map").animate({"opacity":0},200);
	$(this).find(".addressName").css({"background":"rgba(0,0,0,0)","color":"#022ab2"});
});

$(".iconDiv_icon").hover(function() {
	$(this).find(".icon_show").animate({"opacity":0},500);
	$(this).find(".icon_hide").animate({"opacity":1},500);
	$(this).find(".icon_hover").animate({"opacity":1},400);
}, function() {
	$(this).find(".icon_show").animate({"opacity":1},500);
	$(this).find(".icon_hide").animate({"opacity":0},500);
	$(this).find(".icon_hover").animate({"opacity":0},400);
});

// 师资阴影
$(document).on("mouseover",".peoIntro",function(event) {
	$(this).css({"box-shadow":"0px 5px 25px 5px rgba(0,96,255,0.3)"});
});

$(document).on("mouseleave",".peoIntro",function(event) {
	$(this).css({"box-shadow":"0px 0px 0 0 #fff"});
});

// 案例
$(document).on("mouseover",".section",function(event) {
    $(this).find(".sec_top img").css({transform: 'scale(1.1)'});
    $(this).find(".progress").css("width","100%");
    $(this).find(".dec").css("color","#0154d1");
    $(this).css('-webkit-box-shadow','0 0 10px 5px rgba(12,90,234,0.1)');
});
$(document).on("mouseleave",".section",function(event) {
    $(this).find(".sec_top img").css({transform: 'scale(1)'});
    $(this).find(".progress").css("width","0");
    $(this).find(".dec").css("color","#565656");
    $(this).css('-webkit-box-shadow','0 0 0 0 #fff');
});
// (function(){
// 	$(".case_main .section").hover(function() {
// 		$(this).find(".sec_top img").css({transform: 'scale(1.1)'});
// 		$(this).find(".progress").css("width","100%");
// 		$(this).find(".dec").css("color","#0154d1");
// 		$(this).css('-webkit-box-shadow','0 0 10px 5px rgba(12,90,234,0.1)');
// 	}, function() {
// 		$(this).find(".sec_top img").css({transform: 'scale(1)'});
// 		$(this).find(".progress").css("width","0");
// 		$(this).find(".dec").css("color","#565656");
// 		$(this).css('-webkit-box-shadow','0 0 0 0 #fff');
// 	});
// });

$(".apply").on('click',function(){
	window.location.href = "/index.php/Index/About/about?n=3";
})

function GetQueryString(name) {

    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)","i");

    var r = window.location.search.substr(1).match(reg);

    if (r!=null) return unescape(r[2]); return null;

}
// 回到顶部
$('.returnTop').on('click',function(){
    $('body,html').animate({scrollTop: 0},400);
})


$(window).scroll(function(){
    var docTop = $(document).scrollTop();
    if(docTop>="600"){
        $('.returnTop').show();
    }
    else{
        $('.returnTop').hide();
    }

})
