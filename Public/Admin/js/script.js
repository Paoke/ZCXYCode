$(function(){    
		
	$(function() {
		$("#questions > ul > li > a.all_open").click(function() {
			$(this).text($(".foldContent").is(":hidden") ? "全部收起" : "全部展开");
			$(".foldContent").slideToggle();
		});
	});
	
	$("li>h5","#questions").bind("click",function(){
	    var li=$(this).parent();
		if(li.hasClass("fold")){
			li.removeClass("fold");
			$(this).find("span").text("+ 展开")
			$(this).find("b").removeClass("UI-bubble").addClass("UI-ask");
			li.find(".foldContent").slideUp();
		}else{
			li.addClass("fold");
			$(this).find("span").text("- 关闭")
			$(this).find("b").removeClass("UI-ask").addClass("UI-bubble");
			li.find(".foldContent").slideDown();
		}
	});

	$("li>h5","#questions_1").bind("click",function(){
	    var li=$(this).parent();
		if(li.hasClass("fold")){
			li.removeClass("fold");
			$(this).find("span").text("+ 展开")
			$(this).find("b").removeClass("UI-bubble").addClass("UI-ask");
			li.find(".foldContent").slideUp();
		}else{
			li.addClass("fold");
			$(this).find("span").text("- 关闭")
			$(this).find("b").removeClass("UI-ask").addClass("UI-bubble");
			li.find(".foldContent").slideDown();
		}
	});
	
})


$(function(){
		   
		
	$("li>h6","#questions").bind("click",function(){
	    var li=$(this).parent();
		if(li.hasClass("fold")){
			li.removeClass("fold");
			$(this).find("span").text("+ 展开")
			$(this).find("b").removeClass("UI-bubble").addClass("UI-ask");
			li.find(".foldContent8").slideUp();
		}else{
			li.addClass("fold");
			$(this).find("span").text("- 关闭")
			$(this).find("b").removeClass("UI-ask").addClass("UI-bubble");
			li.find(".foldContent8").slideDown();
		}
	});
	
	$("li>h6","#questions_1").bind("click",function(){
	    var li=$(this).parent();
		if(li.hasClass("fold")){
			li.removeClass("fold");
			$(this).find("span").text("+ 展开")
			$(this).find("b").removeClass("UI-bubble").addClass("UI-ask");
			li.find(".foldContent8").slideUp();
		}else{
			li.addClass("fold");
			$(this).find("span").text("- 关闭")
			$(this).find("b").removeClass("UI-ask").addClass("UI-bubble");
			li.find(".foldContent8").slideDown();
		}
	});
	
})
