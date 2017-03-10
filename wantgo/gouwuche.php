<?php
	include "common.php";
	$sql="SELECT * FROM gouwuche";
	$res = getlist($sql, 'xiangqu');	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="css/gouwuche.css"/>
		<title>购物车</title>
	</head>
	<body>
		<?php include"head.php" ?>
		<div class="shopwraps">
			<h3>	<i></i><span>购物车</span></h3>
			<div class="shopbody">
				<ul class="shopmessage">
					<li><label for=""><input type="checkbox" class="pp"/></span><span class="qxfont">全选</span></label></li>
					<li>商品信息</li>
					<li>数量</li>
					<li>金额</li>
					<li>操作</li>
				</ul>
				<div class="share">
					<?php if($res){ ?>
						<?php foreach($res as $k =>$v){ ?>											
							<table border="" class="tables">
								<thead>
									<tr>
										<th colspan="4">
											<label for=""><input type="checkbox" class="xx"/><span class="qxfont">分享人：<?php  echo $v['who']; ?></span></label>
											<!--<label for=""><span class="pp"></span><span class="qxfont">分享人：<?php  echo $v['who']; ?></span></label>-->
										</th>
									</tr>
								</thead>
								<tbody>
									<tr class="trs">
										<td class="td0"><input type="checkbox" class="xq"/></td>
										<td class="td1"><a href=""><img src="<?php echo $v['imgurl']; ?>" alt="" /></a></td>
										<td class="td2"><a href=""><?php echo $v['name']; ?></a></td>
										<td class="td3"><p>颜色分类:<?php echo $v['color']; ?></p><p>尺寸：<?php echo $v['size']; ?></p></td>
										<td class="td4">
											<div class="btns10">
												<button class="btns1"></button>
												<input type="text" oninput="myFunction()" value="<?php echo $v['nums']; ?>" class="inputs1"/>
												<button class="btns2"></button>
											</div>
										</td>
										<td class="td5"><?php echo $v['price']; ?></td>
										<td class="td6" onclick="remove(<?php echo $v['id'] ?>)">删除</td>
									</tr>
								</tbody>
							</table>
							<?php } ?>
					<?php } ?>
					
				</div>
				<div class="shopsfooter">
					<ul class="amessages">
						<li><label for=""><input type="checkbox" class="pp"/></span><span class="qxfont">全选</span></label></li>
						<li class="deleteall">删除</li>
						<li class="yxsp">已选商品<span class="ll">0</span>件</li>
						<li class="heji">合计(不含运费)：￥<span class="hjs">0.00</span></li>
						<i></i>
					</ul>
				</div>
				<div class="jiesuan">
					<button>购物车结算</button>
				</div>
			</div>			
		</div>
		<?php include "footer.php" ?>
	</body>
	
	<script type="text/javascript">
		//input框，只允许输入数字
		function myFunction() {
			$.each($('.inputs1'), function(index,el) {
				var x = $(el).val();
			 	var rea=/^[0-9]*$/g;
			  	var reb=rea.test(x);
			  	if(reb){
			  		if(x> <?php echo $v['num']; ?>){
			  			alert('超过最大数量');
			  			$(el).val(<?php echo $v['num']; ?>);
			  		}else{
			  			return;
			  		}			  		
			  	}else{
			  		if($(el).val()==1){
			  			return;
			  		}else{
			  			$(el).val(1);
			  		}
			  		
			  	}
			});
			    
		}
		// 数量加
		  $(".btns2").click(function() {
		    var t = $(this).parent().find('.inputs1');
		    t.val(parseInt(t.val()) + 1);
		    if(t.val() >=<?php echo $v['num']; ?>){
		    		t.val(<?php echo $v['num']; ?>);
		    }
		    TotalPrice();
		  });
	</script>
	<script type="text/javascript" src="js/gouwuche.js">	</script>
</html>
