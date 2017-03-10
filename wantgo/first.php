<?php
 include "common.php";
 //设计师品牌模块
 $sql = "SELECT * FROM `shops`WHERE productid=1";
$List = getlist($sql,"xiangqu");
//手工艺人模块
 $sql2 = "SELECT * FROM `shops`WHERE productid=2";
$List2 = getlist($sql2,"xiangqu");
//好物推荐模块
 $sql3 = "SELECT * FROM `shops`WHERE productid=4";
$List3 = getlist($sql3,"xiangqu");
//好物推荐模块
$sql4 = "SELECT * FROM `shops`WHERE productid=5";
$List4 = getlist($sql4,"xiangqu");
//猜你喜欢模块
$sql5 = "SELECT * FROM `shops`WHERE productid=6";
$List5 = getlist($sql5,"xiangqu");
//大家喜欢模块
$sql6 = "SELECT * FROM `shops`WHERE productid=7";
$List6 = getlist($sql6,"xiangqu");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>首页</title>
		<link rel="stylesheet" type="text/css" href="css/swiper-3.4.0.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/list.css"/>
		<link rel="stylesheet" type="text/css" href="css/first.css"/>
		<style type="text/css">
			
		</style>
	</head>
	<body>
		<?php include "head.php"?>
			<div class="topBanner">
				<div class="bannerBox">
					<div class="swiper-container1 swiper-container">
							<!--首页最上面轮播图,链分别链接到逛的不同页数-->
						    <div class="swiper-wrapper">
						        <div class="swiper-slide"><a href='guang.php?p=1'><img src="http://xqproduct.xiangqu.com/Fj0T6qM3ayJW6O4WrpUy9y2xFqCN?imageView2/2/w/770/q/90/format/jpg/770x360/"/></a></div>
						        <div class="swiper-slide"><a href='guang.php?p=2'><img src="http://xqproduct.xiangqu.com/FhTaaov4sDQdvpjYmdp1qTws6tT7?imageView2/2/w/770/q/90/format/jpg/770x360/"/></a></div>
						        <div class="swiper-slide"><a href='guang.php?p=3'><img src="http://xqproduct.xiangqu.com/FscRaQzAw9VtrEZvobVFNZUSaN6I?imageView2/2/w/770/q/90/format/jpg/770x360/"/></a></div>
						         <div class="swiper-slide"><a href='guang.php?p=4'><img src="http://xqproduct.xiangqu.com/FrYHBeVbnqbGxLr3pXsDKe_Y9AuD?imageView2/2/w/770/q/90/format/jpg/770x360/"/></a></div>
						         <div class="swiper-slide"><a href='guang.php?p=5'><img src="http://xqproduct.xiangqu.com/Fjf8SlS9GiZ6rB5UzwAhz-cJfXLX?imageView2/2/w/770/q/90/format/jpg/770x360/"/></a></div>
						    </div>
						    <div class="swiper-button-prev"></div>
				    			<div class="swiper-button-next"></div>
					</div>
					<!--链接到限时购-->
					<div class="xiangqu"><a href="xianshigou.php"><img src="http://xqproduct.xiangqu.com/FpbycE-bDMTgCkiWEt7x32qpbOIx?imageView2/2/w/205/q/90/format/jpg/205x360/" alt="" /></a></div>
				</div>
			</div>
			<div class="likeBox">
				<div class="titleBox">
					<h3 class="itemBox">大家喜欢</h3>
					<h4 class="titleDes">快来看看今日最受网友推荐、好评不断的商品，喜欢就赶快带回家吧！</h4>
					<div class="topRight1"><a href=""><em></em>朋友动态</a></div>
					<div class="topRight2"><a href=""><em></em>全部喜欢</a></div>
				</div>
				<div class="xian1"></div>
				<div class="likesCont">
					<div class="swiper-container2 swiper-container">
						<!--大家喜欢模块：从数据库中获取数据，循环呈现或数据。swiper可用鼠标向左右拖动-->
				        <div class="swiper-wrapper">
				        	<?php foreach($List6 as $k=>$v){ ?>
				        			<div class="swiper-slide">
						            		<div class="myPhoto" id="myPhoto1"></div>
						            		<div class="myName"><?php echo $v['who']; ?></div>
						            		<div class="myShop">
						            			<i><?php echo $v['time'] ?></i>
						            			<ins></ins>
						            			喜欢了一个商品
						            		</div>
						            		<a class="myLove" href="xiangqingye.php?id=<?php echo $v['id'] ?>"><img src="<?php echo $v['imgurl'] ?>"/></a>
				         	   </div>
				        	 <?php } ?>
				           
				        </div>
				    </div>
				</div>
			</div>
			<div class="likeBox">
				<div class="titleBox">
					<h3 class="itemBox" style="color:#000000;">设计师品牌</h3>
					<h4 class="titleDes">好的设计需要时间和匠心去打磨，贴合着设计师的手掌和心室使物品获得了温度。</h4>
				</div>
				<div class="contBox">
					<ul class="designerProduct">
						<!--设计师品牌：从数据库中获取数据，循环呈现或数据-->
						<?php foreach($List as $k=>$v){ ?>
								<li>
							<h3>
								<a href="xiangqingye.php?id=<?php echo $v['id'] ?>">
									<img src="<?php echo $v['imgurl'];?>"/>
								</a>
								<p>
									<a title="楷诗陈独立设计师" href="#"><?php echo $v['who']; ?></a>
								</p>
							</h3>
						</li>
						<?php } ?>
						<li>
							<h3>
								<a id="otherA" href="#">
									<span>
										更多<br>
										设计师品牌
									</span>
								</a>
							</h3>
						</li>
					</ul>
				</div>
			</div>
			<div class="handCraftBOx">
				<div class="titleBox">
					<h3 class="itemBox" style="color:#000000;">手工艺人</h3>
					<h4 class="titleDes">造物者是物的创造者，造物者是思想与智慧的源头，用智慧创造了万有，用思想控制着一切。</h4>
				</div>
				<ul class="HandCraftItmes">
					<!--手工艺人模块：从数据库中获取数据，循环呈现或数据-->
					<?php foreach($List2 as $k=>$v){ ?>
						<li>
						<h3>
								<a href="xiangqingye.php?id=<?php echo $v['id'] ?>"><img src="<?php echo $v['imgurl']; ?>" alt="" /></a>
						</h3>
						<p>
							<a href="xiangqingye.php?id=<?php echo $v['id'] ?>"><?php echo $v['who']; ?></a><br>
							<span><?php echo $v['num'];?></span>
							<span>人关注</span>
						</p>
						<!--隐藏的部分-->
						<div class="overflowHidden overflowHidden1">
						</div>
					</li>
							
					<?php } ?>
					<li class="other">
						<h3>
								<a id="otherB" href="https://www.baidu.com">
									<span>
										更多<br>
										手工艺人
									</span>
								</a>
							</h3>
					</li>
				</ul>
			</div>
			<!--列表-->
			<div class="onlineShare">
				<!--方块大6-->
				<a href="#">
					<div class="clearFix">
						<p>
							今天,
							<br>
							想去诞生了
						</p>
						<p>
							<div class="six">6</div>
							<span>个</span>
						</p>
					</div>
					<div>精选商品</div>
				</a>
				<!--右边的列表栏-->
				<div class="shareRight">
					<div class="shareTop">
						<div class="bg"></div>
						<div class="bf">这里熙熙攘攘，你，又会遇见谁创造的美好</div>
					</div>
					<ul>
						<li class="activeAct1">
							<a href="#">
								<div class="activeAct3 activeAct4">女人</div>
								<div class="activeAct3 activeAct4">广场</div>
							</a>
							<div class="act act1"></div>
						</li>
						<li class="activeAct2"></li>
						<li class="activeAct1">
							<a href="#">
								<div class="activeAct3">生活家</div>
								<div class="activeAct3">广场</div>
							</a>
							<div class="act"></div>
						</li>
						<li class="activeAct2"></li>
						<li class="activeAct1">
							<a href="#">
								<div class="activeAct3">男人</div>
								<div class="activeAct3">广场</div>
							</a>
							<div class="act"></div>
						</li>
						<li class="activeAct2"></li>
						<li class="activeAct1">
							<a href="#">
									<div class="activeAct3">设计师</div>
									<div class="activeAct3">作品</div>
								</a>
								<div class="act"></div>
						</li>
						<li class="activeAct2"></li>
						<li class="activeAct1">
							<a href="#">
									<div class="activeAct3">手工</div>
									<div class="activeAct3">作坊</div>
								</a>
								<div class="act"></div>
						</li>
						<li class="activeAct2"></li>
						<li class="activeAct1">
							<a href="#">
								<div class="activeAct3">vintage</div>
								<div class="activeAct3">小铺</div>
							</a>
							<div class="act"></div>
						</li>
					</ul>
				</div>
				<!--跑动的小圆点-->
				<div class="shareBottom">
					<div class="shareBottomLine"></div>
					<p class="shareBottomP1 shareBottomP2"></p>
					<p class="shareBottomP1"></p>
					<p class="shareBottomP1"></p>
					<p class="shareBottomP1"></p>
					<p class="shareBottomP1"></p>
					<p class="shareBottomP1"></p>
					<div class="data1">
						<span>2017&nbsp;/&nbsp;02&nbsp;/&nbsp;18</span>
					</div>
					<ul class="shopPeople">
						<li>908人在逛</li>
						<li>870人在逛</li>
						<li>770人在逛</li>
						<li>650人在逛</li>
						<li>570人在逛</li>
						<li>70人在逛</li>
					</ul>
				</div>
				<div class="shareContent">
					<ul>
						<li class="navAll">
							<div>
								<h2>HOT：</h2>
								<a class="aaaa" href="#">
									<span>日系</span>
								</a>
								<a class="aaaa" href="#">
									<span>通勤</span>
								</a>
								<a class="aaaa" href="#">
									<span>文艺</span>
								</a>
								<a class="aaaa" href="#">
									<span>复古</span>
								</a>
								<a class="aaaa" href="#">
									<span>名族</span>
								</a>
								<a class="aaaa" href="#">
									<span>森女</span>
								</a>
								
								<a class="aaaa" href="#">
									<span>韩版</span>
								</a>
								<a class="aaaa" href="#">
									<span>欧美</span>
								</a>
								<a class="aaaa" href="#">
									<span>定制</span>
								</a>
								<a class="aaaa" href="#">
									<span>潮流</span>
								</a>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth1"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">上衣</span>
									</a>
								</div>
								<div class="listDetail">
									<p>针织衫</p>
									<p>卫衣</p>
									<p>T恤</p>
									<p>衬衫</p>
									<p>西装</p>
									<p>背心</p>
									<p>吊带</p>
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth2"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">下装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>牛仔裤</p>
									<p>休闲裤</p>
									<p>连衣裙</p>
									<p>短裙</p>
									<p>短裤</p>
									<p>长裤</p>
									<!--<p>吊带</p>-->
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth3"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">包装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>背包</p>
									<p>挎包</p>
									<p>抓包</p>
									<p>拎包</p>
									<p>钱包</p>
									<!--<p>背心</p>-->
									<!--<p>吊带</p>-->
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth4"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">鞋靴</span>
									</a>
								</div>
								<div class="listDetail">
									<p>休闲鞋</p>
									<p>单鞋</p>
									<p>高跟鞋</p>
									<p>皮鞋</p>
									<p>凉鞋</p>
									<p>短靴</p>
									<!--<p>吊带</p>-->
								</div>
							</div>
							<div>
							<div class="listTop">
									<div class="listCloth listCloth5"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">配饰</span>
									</a>
								</div>
								<div class="listDetail">
									<p>项链</p>
									<p>耳环</p>
									<p>手镯</p>
									<p>戒指</p>
									<p>手表</p>
									<p>皮带</p>
									<p>假领</p>
								</div>
								</div>
						</li>
						<li class="navAll">
							<div>
								<h2>HOT：</h2>
								<a class="aaaa" href="#">
									<span>简约</span>
								</a>
								<a class="aaaa" href="#">
									<span>文艺</span>
								</a>
								<a class="aaaa" href="#">
									<span>潮牌</span>
								</a>
								<a class="aaaa" href="#">
									<span>名族</span>
								</a>
								<a class="aaaa" href="#">
									<span>复古</span>
								</a>
								<a class="aaaa" href="#">
									<span>英伦</span>
								</a>
								
								<a class="aaaa" href="#">
									<span>运动</span>
								</a>
								<a class="aaaa" href="#">
									<span>韩版</span>
								</a>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth1"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">上装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>针织衫</p>
									<p>卫衣</p>
									<!--<p>T恤</p>-->
									<p>衬衫</p>
									<p>西装</p>
									<p>风衣</p>
									<p>T恤</p>
									<p>polo杉</p>
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth2"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">下装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>短裙</p>
									<p>短裤</p>
									<p>长裤</p>
									<p>牛仔裤</p>
									<p>休闲裤</p>
									<p>连衣裙</p>
									
									<!--<p>吊带</p>-->
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth3"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">包装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>背包</p>
									<p>挎包</p>
									<p>抓包</p>
									<p>钱包</p>
									
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth4"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">鞋靴</span>
									</a>
								</div>
								<div class="listDetail">
									<p>休闲鞋</p>
									<p>单鞋</p>
									
									<p>皮鞋</p>
									<p>凉鞋</p>
									<p>短靴</p>
									
								</div>
							</div>
							<div>
							<div class="listTop">
									<div class="listCloth listCloth5"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">配饰</span>
									</a>
								</div>
								<div class="listDetail">
									<p>项链</p>
									<p>耳环</p>
									<p>手表</p>
									<p>皮带</p>
									<p>假领</p>
									<p>手镯</p>
									<p>戒指</p>
								</div>
								</div>
						</li>
						<li class="navAll">
							<div>
								<h2>HOT：</h2>
								<a class="aaaa" href="#">
									<span>日系</span>
								</a>
								<a class="aaaa" href="#">
									<span>通勤</span>
								</a>
								<a class="aaaa" href="#">
									<span>文艺</span>
								</a>
								<a class="aaaa" href="#">
									<span>复古</span>
								</a>
								<a class="aaaa" href="#">
									<span>名族</span>
								</a>
								<a class="aaaa" href="#">
									<span>森女</span>
								</a>
								
								<a class="aaaa" href="#">
									<span>韩版</span>
								</a>
								<a class="aaaa" href="#">
									<span>欧美</span>
								</a>
								<a class="aaaa" href="#">
									<span>定制</span>
								</a>
								<a class="aaaa" href="#">
									<span>潮流</span>
								</a>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth1"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">上衣</span>
									</a>
								</div>
								<div class="listDetail">
									<p>针织衫</p>
									<p>卫衣</p>
									<p>T恤</p>
									<p>衬衫</p>
									<p>西装</p>
									<p>背心</p>
									<p>吊带</p>
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth2"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">下装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>牛仔裤</p>
									<p>休闲裤</p>
									<p>连衣裙</p>
									<p>短裙</p>
									<p>短裤</p>
									<p>长裤</p>
									<!--<p>吊带</p>-->
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth3"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">包装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>背包</p>
									<p>挎包</p>
									<p>抓包</p>
									<p>拎包</p>
									<p>钱包</p>
									
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth4"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">鞋靴</span>
									</a>
								</div>
								<div class="listDetail">
									<p>休闲鞋</p>
									<p>单鞋</p>
									<p>高跟鞋</p>
									<p>皮鞋</p>
									<p>凉鞋</p>
									<p>短靴</p>
									<!--<p>吊带</p>-->
								</div>
							</div>
							<div>
							<div class="listTop">
									<div class="listCloth listCloth5"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">配饰</span>
									</a>
								</div>
								<div class="listDetail">
									<p>项链</p>
									<p>耳环</p>
									<p>手镯</p>
									<p>戒指</p>
									<p>手表</p>
									<p>皮带</p>
									<p>假领</p>
								</div>
								</div>
						</li>
						<li class="navAll">
							<div>
								<h2>HOT：</h2>
								<a class="aaaa" href="#">
									<span>简约</span>
								</a>
								<a class="aaaa" href="#">
									<span>文艺</span>
								</a>
								<a class="aaaa" href="#">
									<span>潮牌</span>
								</a>
								<a class="aaaa" href="#">
									<span>名族</span>
								</a>
								<a class="aaaa" href="#">
									<span>复古</span>
								</a>
								<a class="aaaa" href="#">
									<span>英伦</span>
								</a>
								
								<a class="aaaa" href="#">
									<span>运动</span>
								</a>
								<a class="aaaa" href="#">
									<span>韩版</span>
								</a>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth1"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">上装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>针织衫</p>
									<p>卫衣</p>
									<!--<p>T恤</p>-->
									<p>衬衫</p>
									<p>西装</p>
									<p>风衣</p>
									<p>T恤</p>
									<p>polo杉</p>
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth2"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">下装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>短裙</p>
									<p>短裤</p>
									<p>长裤</p>
									<!--<p>牛仔裤</p>-->
									<p>休闲裤</p>
									<p>连衣裙</p>
									
									<!--<p>吊带</p>-->
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth3"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">包装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>背包</p>
									<p>挎包</p>
									<p>抓包</p>
									<p>钱包</p>
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth4"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">鞋靴</span>
									</a>
								</div>
								<div class="listDetail">
									<p>休闲鞋</p>
									<p>单鞋</p>
									<!--<p>高跟鞋</p>-->
									<p>皮鞋</p>
									<p>凉鞋</p>
									<p>短靴</p>
									<!--<p>吊带</p>-->
								</div>
							</div>
							<div>
							<div class="listTop">
									<div class="listCloth listCloth5"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">配饰</span>
									</a>
								</div>
								<div class="listDetail">
									<p>项链</p>
									<!--<p>耳环</p>-->
									<p>手表</p>
									<p>皮带</p>
									<p>假领</p>
									<p>手镯</p>
									<p>戒指</p>
								</div>
								</div>
						</li>
						<li class="navAll">
							<div>
								<h2>HOT：</h2>
								
								<a class="aaaa" href="#">
									<span>通勤</span>
								</a>
								<a class="aaaa" href="#">
									<span>文艺</span>
								</a>
								<a class="aaaa" href="#">
									<span>复古</span>
								</a>
								<a class="aaaa" href="#">
									<span>名族</span>
								</a>
								<a class="aaaa" href="#">
									<span>森女</span>
								</a>
								
								<a class="aaaa" href="#">
									<span>韩版</span>
								</a>
								<a class="aaaa" href="#">
									<span>欧美</span>
								</a>
								<a class="aaaa" href="#">
									<span>定制</span>
								</a>
								<a class="aaaa" href="#">
									<span>潮流</span>
								</a>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth1"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">上衣</span>
									</a>
								</div>
								<div class="listDetail">
									<!--<p>针织衫</p>-->
									<p>卫衣</p>
									<p>T恤</p>
									<p>衬衫</p>
									<p>西装</p>
									<p>背心</p>
									<p>吊带</p>
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth2"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">下装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>牛仔裤</p>
									<p>休闲裤</p>
									<p>连衣裙</p>
									<p>短裙</p>
									<p>短裤</p>
									<p>长裤</p>
									<!--<p>吊带</p>-->
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth3"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">包装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>背包</p>
									<p>挎包</p>
									<!--<p>抓包</p>-->
									<p>拎包</p>
									<p>钱包</p>
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth4"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">鞋靴</span>
									</a>
								</div>
								<div class="listDetail">
									<p>休闲鞋</p>
									<p>单鞋</p>
									<p>高跟鞋</p>
									<p>皮鞋</p>
									<p>凉鞋</p>
									<p>短靴</p>
									<!--<p>吊带</p>-->
								</div>
							</div>
							<div>
							<div class="listTop">
									<div class="listCloth listCloth5"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">配饰</span>
									</a>
								</div>
								<div class="listDetail">
									<p>项链</p>
									<p>耳环</p>
									<!--<p>手镯</p>-->
									<p>戒指</p>
									<p>手表</p>
									<p>皮带</p>
									<!--<p>假领</p>-->
								</div>
								</div>
						</li>
						<li class="navAll">
							<div>
								<h2>HOT：</h2>
								<a class="aaaa" href="#">
									<span>简约</span>
								</a>
								<a class="aaaa" href="#">
									<span>文艺</span>
								</a>
								<a class="aaaa" href="#">
									<span>潮牌</span>
								</a>
								<a class="aaaa" href="#">
									<span>名族</span>
								</a>
								<a class="aaaa" href="#">
									<span>复古</span>
								</a>
								<a class="aaaa" href="#">
									<span>英伦</span>
								</a>
								
								<a class="aaaa" href="#">
									<span>时尚</span>
								</a>
								<a class="aaaa" href="#">
									<span>韩版</span>
								</a>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth1"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">上装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>针织衫</p>
									<p>卫衣</p>
									<p>T恤</p>
									<p>衬衫</p>
									<p>西装</p>
									<p>风衣</p>
									<p>T恤</p>
									<p>polo杉</p>
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth2"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">下装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>短裙</p>
									<p>鞋子</p>
									<p>长裤</p>
									<p>牛仔裤</p>
									<p>休闲裤</p>
									<p>连衣裙</p>
									
									<!--<p>吊带</p>-->
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth3"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">包装</span>
									</a>
								</div>
								<div class="listDetail">
									<p>背包</p>
									<p>挎包</p>
									<p>抓包</p>
									<p>拎包</p>
									<p>钱包</p>
									<!--<p>背心</p>-->
									<!--<p>吊带</p>-->
								</div>
							</div>
							<div>
								<div class="listTop">
									<div class="listCloth listCloth4"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">鞋靴</span>
									</a>
								</div>
								<div class="listDetail">
									<p>休闲鞋</p>
									<p>单鞋</p>
									<p>高跟鞋</p>
									<p>皮鞋</p>
									<p>凉鞋</p>
									<p>短靴</p>
									<!--<p>吊带</p>-->
								</div>
							</div>
							<div>
							<div class="listTop">
									<div class="listCloth listCloth5"></div>
									<a class="bbbb" href="#">
										<span class="listTitle1">配饰</span>
									</a>
								</div>
								<div class="listDetail">
									<p>项链</p>
									<p>家居</p>
									<p>留言</p>
									<p>皮带</p>
									<p>假领</p>
									<p>手镯</p>
									<p>戒指</p>
								</div>
								</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="goodRecommand">
				<div class="titleBox">
					<h3 class="itemBox" style="color:#000000;">好物推荐</h3>
					<h4 class="titleDes">快来看看今日最受网友推荐、好评不断的商品，喜欢就赶快带回家吧！</h4>
				</div>
			</div>
			<div class="swiper-container3 swiper-container">
	        		<div class="swiper-wrapper swiper-wrapper3">
		            <div class="swiper-slide" >
		            		<ul class="swiperSlideItem">
		            			<!--好物推荐模块-->
		            			<?php foreach($List3 as $k=>$v){ ?>
		            				
		            			
		            			<li><a href="xiangqingye.php?id=<?php echo $v['id'] ?>"><img src="<?php echo $v['imgurl']; ?>"/>
		            				<div class="itemName"><?php echo $v['who'] ?> </div>
		            			</a></li>
		            			<?php } ?>
		            		</ul>
		            </div>
		            <div class="swiper-slide" >
		            	<ul class="swiperSlideItem">
		            			<!--好物推荐模块-->
		            			<?php foreach($List4 as $k=>$v){ ?>
		            				
		            			
		            			<li><a href="xiangqingye.php?id=<?php echo $v['id'] ?>"><img src="<?php echo $v['imgurl']; ?>"/>
		            				<div class="itemName"><?php echo $v['who'] ?> </div>
		            			</a></li>
		            			<?php } ?>
		            		</ul>
		            </div>
		           
	       		</div>
	        <div class="swiper-button-prev"></div>
        		<div class="swiper-button-next"></div>
        </div>
        <div class="randomLinks">
        		<div class="titleBox">
					<h3 class="itemBox" style="color:#000000;">猜你喜欢</h3>
					
				</div>
				<ul class="perhapsLike">
					<!--猜你喜欢模块-->
					<?php foreach($List5 as $k=>$v){ ?>
							<li>
							<a href="xiangqingye.php?id=<?php echo $v['id']; ?>"><img src="<?php echo $v['imgurl']; ?>"/></a>
							</li>
					<?php } ?>
					
					
				</ul>
        </div>
        <div class="liuyanBiao">
        		<img src="img/bottom.png"/>
        </div>
        <?php include "footer.php"?>
	</body>
	<script type="text/javascript" src="js/swiper-3.4.0.min.js">	</script>
	<script type="text/javascript" src="js/first.js"></script>
</html>
