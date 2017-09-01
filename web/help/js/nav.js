/**
 * Created by testin on 2015/7/29.
 */
$(function(){
	
	var navBar = $(".nav");//导航
	var navLevel = $('.nav-lev');//二级导航
	navBar.removeClass('move-up');
	var screenWidth = $(window).width();
	var deviceW = $(window).width();
	/*$(window).scroll(function(){
		if(screenWidth>1200){
			var top = $(window).scrollTop();//侧边栏距离文档顶部的距离
			if(top>64){
					
				navLevel.addClass('fix');
				
			}else{
				navLevel.removeClass('fix');
			}
		}
		
	});*/
	if(screenWidth>767){
		$(".nav-next").hide();
	}else{
		$(".nav-next").show();
	}
	$('.nav-btn').on('click',function(){
		$(".nav .nav-l,.nav .nav-r").slideToggle();
		if($(this).hasClass('ch-btn')){
			
			$(".nav-r").removeClass('trs-100').addClass('trs0');
			$(".nav-l").removeClass('trs-100').addClass('trs0');
			$(".nav-next").removeClass('trs0').addClass('trs100');
		}
		$(this).toggleClass('ch-btn');
	
	});
	$(".nav-it").on("click",function(){
		if(screenWidth<767){
			$(".nav-r").addClass('trs-100');
			$(".nav-l").addClass('trs-100');
			$(".nav-next").addClass('trs0');
		}else{
			$(".nav-next,.dost").slideToggle();
		}
	});
	$('.back i').on('click',function(){
		if(screenWidth<767){
			$(".nav-r").removeClass('trs-100').addClass('trs0');
			$(".nav-l").removeClass('trs-100').addClass('trs0');
			$(".nav-next").removeClass('trs0').addClass('trs100');
		}
	});
})

