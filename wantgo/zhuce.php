<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>注册</title>
		<link rel="stylesheet" type="text/css" href="css/zhuce.css"/>		
	</head>
	<body>
		<?php include "commonone.php" ?>
		
		<div class="box">
			<div class="body">
				<div class="form-head">
					<h2>账户注册</h2>
				</div>
				<div class="form-body">
					<ul>
						<li>
							<div class="input-box">
								<div class="inputs">
									 <i class="iconfont">&#xe639;</i>
									<input type="text" class="inputPhone" placeholder="请输入手机号"/>
								</div>
							</div>
						</li>
						<li>
							<div class="input-box">
								<div class="inputs">
									 <i class="iconfont">&#xe63a;</i>
									<input type="password" class="inputPwd" placeholder="请输入密码"/>
								</div>
								<p class="Pwdp">密码由6-20位英文字母、数字和符号组成</p>
							</div>
						</li>
						<li>
							<p class="btnp" id="exchange"></p>
							<span class="loginBtn" onclick="sub()">注册想去</span>
							<p class="xy">注册即表示同意 	<a href="">《用户使用条款及服务协议》</a></p>
						</li>
						<li class="login-box">
							<a href="denglu.php">登录
							<i class="iconfont">&#xe635;</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js">	</script>
	<script type="text/javascript" src="js/zhuce.js"></script>
</html>
