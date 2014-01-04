$(function(){
	//回到顶部
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100) {
			$("#back-to-top").fadeIn(500);
		}
		else {
			$("#back-to-top").fadeOut(500);
		}
	});
	$("#back-to-top").click(function(){
		$("html,body").animate({scrollTop:0},500);

	});
	
	$("#back-to-top").tooltip();

	//搜索栏动画
	$("#search").focus(function(){
		$("#search").stop(true,true).animate({
			width:"250px"
		});
	});
	$("#search").blur(function(){
		$("#search").stop(true,true).animate({
			width:"147px"
		});
	});

	//导航栏active
	var $item=$("ul.nav li");
	$item.click(function(){
		$(this).addClass("active");
	});

	//sidebar的class  :(在functions.php中解决)
	$(".side p").siblings().addClass("animated list").children().addClass("item");
	/*移除有bug的动画(weibo和tag)
	$(".side p:eq(0)").next().removeClass("animated");
	$(".side p:eq(2)").siblings().children().removeClass("item");*/


});