<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/head.css"/>
	</head>
	<body>
		<!--头部一-->
		<div class="nav">
			<div class="nav-go">
				<div class="siteLogo">
					<h1 class="fl">
						<a href="#">
						<img src="img/head/pc_logo2.jpg" alt="想去-买的起的好设计" />
					</a>
					</h1>
					
				</div>
			<div class="userInfo">
				<div class="app-down">
					<div class="menu-hd" id="menu-xia">
						<a href="#" target="_blank">
							下载App 	<div class="down1"></div>
							
						</a>
					</div>
				</div>
				<div class="designers">
					<div class="menu-hd" id="menu-she">
						<a href="#" target="_blank">
							设计师入住
						</a>
					</div>
				</div>
				<div class="soeasy">
				<?php 
				if(!empty($_COOKIE['inputPhone'])){				
					echo $_COOKIE['inputPhone']."欢迎您登陆！<a href='destory.php'>注销登陆</a>";
				}else{ ?>
				<div class="zhuce">
					<div class="menu-hd">
						<a href="zhuce.php" target="_self">
							注册
						</a>
					</div>
				</div>
				<div class="denglu">
					<div class="menu-hd">
						<a href="denglu.php" target="_self">
							登陆
						</a>
					</div>
				</div>
				<?php } ?>
				</div>
				<div class="gouwuche1">
					<div class="menu-hd">
						<a href="gouwuche.php" target="_blank">
							购物车
						</a>
					</div>
				</div>
				<div class="goBack">
					<div class="menu-hd">
						<a href="first.php" target="_self">
							回到首页
						</a>
					</div>
				</div>
				<div class="erweima"><img src="http://xqproduct.xiangqu.com/FrPIlipUd8Wgy0WwQ81zE3L-_gim" alt=""></div>
			</div>
			</div>
		</div>
		<!--头部二-->
		<div class="nav-search">
			<ul class="main-nav">
				<li><a href="first.php">首页</a></li>
				<li><a href="guang.php">逛</a></li>
				<li><a href="xianshigou.php">限时购</a></li>
				
			</ul>
			<div class="main-input">
				<div class="search">
					<input type="text" name="" id="searchText" value="" placeholder="爱心"/>
					<input type="submit" name="" id="searchSubmit" value="" />
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="js/head.js">	</script>
</html>
