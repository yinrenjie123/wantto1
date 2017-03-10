		//详情页
		//评论区
		$('.fbpl').click(function(){
			var contens=$('.xxpls').val();
			if(contens==''){
				alert('你输入的内容不能为空');
			}else{
				$('#comment_ul').prepend("<li>"+contens+"</li>");
				$('.xxpls').val('');
			}
			
		});
		
		
		//swiper
		 var mySwiper = new Swiper ('.swiper-container', {
				direction: 'horizontal',
				loop: true, 
				// 如果需要分页器
				nextButton: '.swiper-button-next',
   				prevButton: '.swiper-button-prev',
		});
		$('.swiper-container').on({
			mouseover:function(){
				$('.swiper-button-prev').show();
				$('.swiper-button-next').show();
			},
			mouseout:function(){
				$('.swiper-button-prev').hide();
				$('.swiper-button-next').hide();
			}
		});
		
		//颜色的循环
		var aa=null;
		$.each($('.tuan span'),function(ind,el){
			$(el).click(function(){
				var _this = this;
				$.each($('.tuan span'),function(kk,vv){
					if(_this==vv){
						//console.log($('.xinghao span i').eq(ind));
						if($(_this).find("i").css("display")=="none"){
								$(_this).find("i").show();
								  aa=$(_this);
						}else{
							$(_this).find("i").hide();
						}
					}else{
						$(vv).find("i").hide();
					}
				});
				
			});	
			
		});
		var bb=null;
		//型号的循环
		$.each($('.xinghao span'),function(ind,el){
			$(el).click(function(){
				var _this = this;
				$.each($('.xinghao span'),function(kk,vv){
					if(_this==vv){
						//console.log($('.xinghao span i').eq(ind));
						if($(_this).find("i").css("display")=="none"){
								$(_this).find("i").show();
								 bb=$(_this);
								//console.log($(_this));
						}else{
							$(_this).find("i").hide();
						}
					}else{
						$(vv).find("i").hide();
					}
				});
				
			});	
			
		});	
		
		
		//按钮-
		$(".btns1").click(function(){
			var a =$('.inputs1').val();
			a--;
			if(a<=0){
				a=0;
			}
			$('.inputs1').val(a);
			
		});  	
		