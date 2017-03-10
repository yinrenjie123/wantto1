<?php
	include "common.php";
	$sql ="SELECT *FROM shops";
	//分页的处理
	$list = getlist($sql, 'xiangqu');
	$totalPage = count($list);
	$everyPage = 15;
	$page = ceil($totalPage/$everyPage);
	if($_GET){
		$p=$_GET['p'];
		$start=($p-1)*$everyPage;	
		$sql2 = "SELECT * FROM shops LIMIT $start,$everyPage";
		$firstList = getlist($sql2, "xiangqu");
		//上一页
		$id=$p-1;
		//下一页
		$ids=$p+1;
		//当页数为第一页时，点击还是第一页
		if($id<1){
			$id=1;
		}
		//当页数到达最后一页时，点击还是最后一页
		if($ids>$page){
			$ids=$page;
		}
	}else{
		$sql2 = "SELECT * FROM shops LIMIT 0,$everyPage";
		$firstList = getlist($sql2, "xiangqu");
		//print_r($firstList) ;
		//首次进入逛页面时，没有get参数的处理，上一页,下一页
		$id=1;
		$ids=2;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>逛</title>
		<link rel="stylesheet" type="text/css" href="css/guang.css"/>
		<style type="text/css">
		</style>
	</head>
	<body>
		<?php include"head.php" ?>
		<div class="guanghead">
			<div class="headtop">
				<i></i>
				<p>逛商品</p>
			</div>
			<ul>
				<li>
					<div class="lists lists1">
						<!--商品分类开始-->
						<dl>
							<dt><a href="">女人<br>广场</a></dt>
							<dd><a href="">上衣</a></dd>
							<dd><a href="">下装</a></dd>
							<dd><a href="">包装</a></dd>
							<dd><a href="">鞋靴</a></dd>
							<dd><a href="">配饰</a></dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="lists lists2">
						<dl>
							<dt><a href="">男人<br>广场</a></dt>
							<dd><a href="">上衣</a></dd>
							<dd><a href="">下装</a></dd>
							<dd><a href="">包装</a></dd>
							<dd><a href="">鞋靴</a></dd>
							<dd><a href="">配饰</a></dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="lists lists3">
						<dl>
							<dt><a href="">生活家<br>广场</a></dt>
							<dd><a href="">日杂用品</a></dd>
							<dd><a href="">居家装饰</a></dd>
							<dd><a href="">炫酷科技</a></dd>
							<dd><a href="">文娱玩乐</a></dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="lists lists4" id="listss">
						<dl>
							<dt><a href="">独立设计师<br>作品</a></dt>
							<dd><a href="">女人</a></dd>
							<dd><a href="">男人</a></dd>
							<dd><a href="">生活家</a></dd>
							
						</dl>
					</div>
				</li>
				<li>
					<div class="lists lists5">
						<dl>
							<dt><a href="">手工<br>作坊</a></dt>
							<dd><a href="">配饰</a></dd>
							<dd><a href="">包装</a></dd>
							<dd><a href="">鞋</a></dd>
							<dd><a href="">毛衣</a></dd>
							<dd><a href="">工艺</a></dd>
							<dd><a href="">毛绒</a></dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="lists lists6">
						<dl>
							<dt><a href="">vintage<br>小铺</a></dt>
							<dd><a href="a">服饰</a></dd>
							<dd><a href="">配饰</a></dd>
							<dd><a href="">包装</a></dd>
							<dd><a href="">鞋靴</a></dd>
							<dd><a href="">家具</a></dd>
							<dd><a href="">玩物</a></dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="lists lists7">
						<dl>
							<dt><a href="">奢侈品<br>大道</a></dt>
							<dd><a href="">男士</a></dd>
							<dd><a href="">女士</a></dd>
							
						</dl>
					</div>
				</li>
				<li>
					<div class="lists lists8">
						<dl>
							<dt><a href="">艺术品<br>展厅</a></dt>
							<dd><a href="">即将开业</a></dd>
							
						</dl>
					</div>
						<!--商品分类结束-->
				</li>
			</ul>
		</div>
		<div class="gwrap">
			<h2>逛商品</h2>
			<div class="gfooter">
				<a href="" style="background-color: black; color: #fff;">
					<span>最新</span>
				</a>
				<a href="" >
					<span>推荐</span>
				</a>
				<a href="" >
					<span>最热</span>
				</a>
			</div>
			<i></i>
		</div>
		<div class="ggbody">
			<div class="ggwrap">
				<ul class="goods">
					<!--逛页面的商品-->
					<?php foreach($firstList as $k =>$v){ ?>
						<li>
						<div class="dx">
							<a href="xiangqingye.php?id=<?php echo $v['id'] ?>">
								<img src="<?php echo $v['imgurl']; ?>"/>
							</a>
							
							<div class="goodswrap">
								<div class="xt"></div>
								<div class="price">
									<span>￥<?php echo $v['price'] ?></span>
									<div class="like">
										<a href="">
											<i></i>
										</a>
										<div class="like-num">
											<dl>
												<dd>0</dd>
											</dl>
										</div>
									</div>
								</div>
								<div class="content">
									<dl>
										<dt>
											<a href=""><?php echo $v['who'] ?></a>
										</dt>
										<dd>
											<a href=""><?php echo $v['type01'] ?></a>
										</dd>
										<dd class="dd">
											<ins></ins>
										</dd>
										<dd>
											<a href=""><?php echo $v['type02'] ?></a>
										</dd>
									</dl>
								</div>
							</div>
						</div>
					</li>
				<?php	} ?>
					
				
				</ul>
				
				<div class="pages">
					<div class="pagesc">
						<!--分页-->
						<a href='guang.php?p=<?php echo $id; ?>'>上一页</a>
						<?php for($i=1;$i<=$page;$i++){
		                		echo "<a href='guang.php?p=$i'>".$i."</a> ";
		              	 } ?>
						<a href='guang.php?p=<?php echo $ids; ?>'>下一页</a>
					</div>
				</div>
			</div>
		</div>
		<?php include "footer.php" ?>
	</body>
</html>
