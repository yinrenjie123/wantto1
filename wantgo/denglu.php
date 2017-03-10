<!DOCTYPE html>           
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录</title>
		<link rel="stylesheet" type="text/css" href="css/zhuce.css"/>
		<link rel="stylesheet" type="text/css" href="css/denglu.css"/>
	</head>
	<body>
		<?php include "commonone.php" ?>		
		<div class="box">
			<div class="leftlogin">
				<div>
					<a href="">
						<img src="http://www.xiangqu.com/build/xiangqu/images/login_pic/login_left_pic_03.jpg"/>
					</a>
				</div>
			</div>
			<div class="rightlogin">
				<div class="rightbody">
					<div class="righttitle">
						<h2>账户登录</h2>
					</div>
					<div class="loginline">
						<span>使用想去账号登录</span>
					</div>
					<div class="login-xq">
						<ul>
						<li>
							<div class="input-box">
								<div class="inputs">
									 <i class="iconfont">&#xe639;</i>
									<input type="text" class="inputPhone" placeholder="请输入手机号或邮箱"/>
								</div>
							</div>
						</li>
						<li>
							<div class="input-box">
								<div class="inputs">
									 <i class="iconfont">&#xe63a;</i>
									<input type="password" class="inputPwd" placeholder="请输入密码"/>
								</div>
							</div>
						</li>
						<div>
							<div class="forget">
								<span class="rz" id="exchange1"></span>
								<a class="fr" href="">忘记密码》</a>
							</div>
							<span class="login"  onclick="sub1()">登录</span>
						</div>
						
					</ul>
					</div>
					<div class="loginline">
							<span>使用社交账号登录</span>
					</div>
					<div class="zh">
						<ul>
							<li class="weixin">
								<a href="">
									<i></i>
									<!--<p>微信</p>-->
								</a>
							</li>
							<li class="weibo">
								<a href="">
									<i></i>
								</a>
							</li>
							<li class="qq">
								<a href="">
									<i></i>	
								</a>
							</li>
						</ul>
					</div>
					<div class="lastp">
						还没有账号
						<a href="zhuce.php">
							立即注册》
						</a>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js">	</script>
	<script src="js/denglu.js" type="text/javascript" charset="utf-8"></script>
</html>
