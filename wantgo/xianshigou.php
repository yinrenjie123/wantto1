<?php 
	include 'common.php';
	$sql = "SELECT * FROM `shops`WHERE productid=11";
	$List = getlist($sql,"xiangqu");	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>限时购</title>
		<link rel="stylesheet" type="text/css" href="css/xianshigou.css"/>
	</head>
	<body>
		<?php include"head.php" ?>
		<div class="limitedhead">
			<img src="http://xqproduct.xiangqu.com/FqvHIivYvCwmCZy_yfjA28R5rTdP"/>			
		</div>
		<div class="bigbox">
			<h1>
				<span>今日推荐</span>
				<ul class="timegoes">
					<li class="day0 "></li>
					<li class="day1 "></li>
					<li class="timeicon">天</li>
					<li class="hour0 "></li>
					<li class="hour1 "></li>
					<li class="timeicon">小时</li>
					<li class="minu0 "></li>
					<li class="minu1 "></li>
					<li class="timeicon">分钟</li>
					<li class="secn0 "></li>
					<li class="secn1 "></li>
					<li class="timeicon">秒</li>
				</ul>
			</h1>
			<ul class="timelists">
				<?php foreach($List as $k =>$v){ ?>
					<li>
						<div class="lists">
							<a href="xiangqingye.php?id=<?php echo $v['id'] ?>"><img src="<?php echo $v['imgurl']; ?>"/></a>
							<p>
								<span class="price">￥<?php echo $v['price']; ?></span>
								<span class="backgrounds"> </span>
							</p>
						</div>
						<p class="listname"><?php echo $v['who']; ?></p>
						<p class="pbackground"><span><?php echo $v['pp']; ?></span></p>
						<p class="pbc">推荐理由：<span><?php echo $v['name']; ?></span></p>
					</li>
				<?php } ?>
				
			</ul>
		</div>
		<div class="clocks">
			<p>
				<span class="phour"></span>小时
				<span  class="pminute"></span>分
				<span  class="psecond"></span>秒
			</p>
		</div>
		<?php include "footer.php" ?>
	</body>
	<script type="text/javascript" src="js/xianshigou.js"></script>
</html>
