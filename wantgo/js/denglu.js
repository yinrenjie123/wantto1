//登陆页
//点击登录按钮时触发的函数
		function sub1(){
			//获取当前input框中的数据
			var inputPhone = $(".inputPhone").val();
			var inputPwd = $(".inputPwd").val();
			//如果input框中任意一个为空，提示用户
			if(inputPhone==""||inputPwd==""){
				$("#exchange1").html("<font color='red'>不要偷懒，输完整O(∩_∩)O哈！</font>");
				
			}else{
				//如果都不为空，将数据通过ajax提交到台，后台通过数据库查看用户名和密码是否正确
				$.ajax({
				type:"post",
				url:"check.php",
				async:true,
				dataType:"json",
				data:{
					inputPhone:inputPhone,
					inputPwd:inputPwd,
				},
				success:function(data){
					//console.log(data.status);
						if(data.status==1){
							//如果信息都对，提示成功，并跳转到首页
							alert('登录成功');
							window.location.href = "first.php";
							
						}else{
							//如果信息出现错误，提示用户输入错误
							$("#exchange1").html("<font color='red'>你是不是记错了什么n(*≧▽≦*)n</font>");
							$(".inputPhone").val('');
							$(".inputPwd").val('');
						}
				
					}
				});
			}
			
		}
		//当重新放回input框中时错误,文字提示消失
		$(".inputPhone").focus(function(){
			 $("#exchange1").html("");
		}); 
		$(".inputPwd").focus(function(){
			 $("#exchange1").html("");
		});