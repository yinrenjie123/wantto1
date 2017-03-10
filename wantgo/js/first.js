		//第一个大图滚动
		var mySwiper = new Swiper ('.swiper-container1', {
				direction: 'horizontal',
				loop: true, 
				autoplay : 2000,
				autoplayDisableOnInteraction : false,
				grabCursor : true,
				// 如果需要分页器
				pagination: '.swiper-pagination',
				nextButton: '.swiper-button-next',
   				prevButton: '.swiper-button-prev',
		});
		//第二个大图滚动
		var swiper = new Swiper('.swiper-container2', {
		        pagination: '.swiper-pagination',
		        paginationClickable: true,
		        slidesPerView: 5,
		        spaceBetween: 50,
		        breakpoints: {
		            1024: {
		                slidesPerView: 4,
		                spaceBetween: 40
		            },
		            768: {
		                slidesPerView: 3,
		                spaceBetween: 30
		            },
		            640: {
		                slidesPerView: 2,
		                spaceBetween: 20
		            },
		            320: {
		                slidesPerView: 1,
		                spaceBetween: 10
		            }
		        }
		  });
		  //第三个大图滚动
		  var swiper = new Swiper('.swiper-container3', {
		        pagination: '.swiper-pagination',
		        effect: 'flip',
		        grabCursor: true,
		        loop: true,
		        nextButton: '.swiper-button-next',
		        prevButton: '.swiper-button-prev'
  		  });
		  //设计师品牌那一页的鼠标移入移出效果
		    $.each($(".designerProduct li h3 p"), function(index,el) {
				$(el).mouseover(function(){
					$(".designerProduct li h3 p a").eq(index).css("textDecoration","underline");
				})	
				$(el).mouseleave(function(){
					$(".designerProduct li h3 p a").eq(index).css("textDecoration","none");
				})		    	
		    });
		    //手工艺人那一页的鼠标移入移出效果
		    $.each($(".HandCraftItmes li"), function(index,el) {
				$(el).mouseover(function(){
					$(".HandCraftItmes li p a").eq(index).css("textDecoration","underline");
					$(".HandCraftItmes li div").eq(index).css("display","block");
				})	
				$(el).mouseleave(function(){
					$(".HandCraftItmes li p a").eq(index).css("textDecoration","none");
					$(".HandCraftItmes li div").eq(index).css("display","none");
				})		    	
		    });
		    //列表页的鼠标移入移出效果以及下面的点和不同页面
		    $.each($(".activeAct1"), function(index,el) {
				$(el).mouseover(function(){
					$(".activeAct3").css("color","black");
					$(".activeAct3").eq(index*2).css("color","white");
					$(".activeAct3").eq(index*2+1).css("color","white");
					$(".act").css("display","none");
					$(".act").eq(index).css("display","block");
					$(".shareBottom p").css("background-position","0 -250px");
					$(".shareBottom p").eq(index).css("background-position","0 -316px");
					$(".shareContent ul li").css("display","none");
					$(".shareContent ul li").eq(index).css("display","block");
				})    	
		    });
		    //列表分类的头，字的背景变黑
		     $.each($(".listTitle1"), function(index,el) {
				$(el).mouseover(function(){
					$(".listTitle1").css("color","black");
					$(".listTitle1").eq(index).css("color","white");
					$(".listTitle1").css("background-color","white");
					$(".listTitle1").eq(index).css("background-color","black");
				})    	
		    });
		    //列表下面的东西实现出现边框
		     $.each($(".listDetail p"), function(index,el) {
				$(el).mouseover(function(){
					//console.log(index);
					$(".listDetail p").css("border","0px solid #cc9e96");
					$(".listDetail p").eq(index).css("border","1px solid #cc9e96");
				})    	
		    });
		    //table选项卡
		     $.each($(".aaaa"), function(index,el) {
				$(el).mouseover(function(){
					//console.log(index);
					$(".aaaa").css("background-color","white");
					$(".aaaa").eq(index).css("background-color","rgb(224,224,224)");
				})    	
		    });
		    //好物推荐模块
		     $.each($(".swiperSlideItem li"), function(index,el) {
				$(el).mouseover(function(){
					//console.log(index);
					$(".itemName").css({color:"black",backgroundColor:"white"});
					$(".itemName").eq(index).css({color:"white",backgroundColor:"gray"});
				})    	
		    });