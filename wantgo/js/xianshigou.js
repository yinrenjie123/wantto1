		//限时购
		//图片背景的倒计时
		var intDiff = parseInt(3*24*60*60);
		function timer(intDiff) {
			setInterval(function() {
				var day = 0,
					hour = 0,
					minute = 0,
					second = 0;
				if(intDiff > 0) {
					day = Math.floor(intDiff / (60 * 60 * 24));
					hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
					minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
					second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
				}

				if(day >= 10) {
					day00 = parseInt(day / 10);
					day01 = parseInt(day % 10);
				}else{
					day00 = 0;
					day01 = parseInt(day);
				}

				if(hour >= 10) {
					hour00 = parseInt(hour / 10);
					hour01 = parseInt(hour % 10);
				}else{
					hour00 = 0;
					hour01 = parseInt(hour);
				}
				if(minute >= 10) {
					minute00 = parseInt(minute / 10);
					minute01 = parseInt(minute % 10);
				}else{
					minute00 = 0;
					minute01 = parseInt(minute);
				}
				if(second >= 10) {
					second00 = parseInt(second / 10);
					second01 = parseInt(second % 10);
				}else{
					second00 = 0;
					second01 = parseInt(second);
				}
				var a00 = -day00 * 31;
				var a01 = -day01 * 31;
				var b00 = -hour00 * 31;
				var b01 = -hour01 * 31;
				var c00 = -minute00 * 31;
				var c01 = -minute01 * 31;
				var d00 = -second00 * 31;
				var d01 = -second01 * 31;
				intDiff--;
				//用css不行
				$('.phour').html(hour);
				$('.pminute').html(minute);
				$('.psecond').html(second);
				$('.day0').animate({backgroundPositionY:a00+'px'});
				$('.day1').animate({backgroundPositionY:a01+'px'});
				$('.hour0').animate({backgroundPositionY:b00+'px'});
				$('.hour1').animate({backgroundPositionY:b01+'px'});
				$('.minu0').animate({backgroundPositionY:c00+'px'});
				$('.minu1').animate({backgroundPositionY:c01+'px'});
				$('.secn0').animate({backgroundPositionY:d00+'px'});
				$('.secn1').animate({backgroundPositionY:d01+'px'});
				
			},1000)
		}
		timer(intDiff);	
		//当scroll大于280时，出现时钟
		$(document).on("scroll", function() {
			if($(document).scrollTop() > 280) {
				$(".clocks").show();
			} else {
				$(".clocks").hide();
			}
		});