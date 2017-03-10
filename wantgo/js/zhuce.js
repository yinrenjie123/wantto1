		//注册页
		function sub(){
			var inputPhone = $(".inputPhone").val();
			var inputPwd = $(".inputPwd").val();
			if(inputPhone==""||inputPwd==""){
				$("#exchange").html("<font color='red'>不要偷懒，输完整O(∩_∩)O哈！</font>");
			}else if(inputPhone && /^1[3|4|5|8]\d{9}$/.test(inputPhone) && inputPwd && /^(?![\d]+$)(?![a-zA-Z]+$)(?![!#$%^&*]+$)[\da-zA-Z!#$%^&*]{6,20}$/.test(inputPwd)){
				$.ajax({
				type:"post",
				url:"add.php",
				async:true,
				dataType:"json",
				data:{
					inputPhone:inputPhone,
					inputPwd:inputPwd,
				},
				success:function(data){
					if(data.status==1){
						window.location.href = "denglu.php";
					}else if(data.status==3){
						$("#exchange").html("<font color='red'>此号码已存在</font>");
					}else{
						$("#exchange").html("<font color='red'>注册失败</font>");
					}
				}
			});
			}else{
				$("#exchange").html("<font color='red'>你确定你按规定写了(*≧▽≦*)</font>");
			}
			
		}