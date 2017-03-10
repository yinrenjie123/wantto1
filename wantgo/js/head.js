		//头部页
		var menu = document.getElementById("menu-xia");
		var erweima = document.getElementsByClassName("erweima")[0];
		var mainNav = document.querySelectorAll(".main-nav li"); 
		//鼠标放在下载APP上时，二维码出现
		menu.onmouseover = function(){
			erweima.style.display = "block";
		}
		//鼠标移开下载APP上时，二维码消失
		menu.onmouseleave = function(){
			erweima.style.display = "none";
		}
		//首页，逛，限时购鼠标放上去底部出现2px黑色实线
		for(var i=0;i<mainNav.length;i++){
			mainNav[i].num = i;
			mainNav[i].onclick = function(){
				for(var j=0;j<mainNav.length;j++){
					mainNav[j].style.borderBottom = "none"; 
				}
				mainNav[this.num].style.borderBottom = "2px black solid";
			}
		}		