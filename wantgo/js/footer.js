		//底部页
		//点击关闭时，固定定位的入住下载消失
		$(".close").click(function() {
			$(".download").hide();
		});
		//当滚动条大于0时，弹簧出现
		$(document).on("scroll", function() {
			if($(document).scrollTop() > 0) {
				$(".backtop").show();
			} else {
				$(".backtop").hide();
			}
		});
		//鼠标放到弹簧图片时，图片更改为回到顶部弹簧图片，移出改为弹簧图片
		//点击回到顶部弹簧图片时，使文档回到顶部，弹簧图片消失
		$(".backtop").on({
			mouseover: function() {
				$(".backtop").css("backgroundImage", "url('http://www.xiangqu.com/build/xiangqu/common/151207/images/core/gotop_hover.gif')");
			},
			mouseout: function() {
				$(".backtop").css("backgroundImage", "url('http://www.xiangqu.com/build/xiangqu/common/151207/images/core/gotop.gif')");
			},
			click: function() {
				$('body').animate({ scrollTop: '0px' }, 100, function() {
					$(".backtop").hide();
				});
			}
		});