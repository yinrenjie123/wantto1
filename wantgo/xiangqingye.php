<?php
	include "common.php";
	//通过商品对应的id查询到对应的商品进行显示
	$id = $_GET['id'];
	$sql = "SELECT * FROM shops WHERE id=$id";
	$one = getone($sql, 'xiangqu');
	//print_r($one);
	$str=$one['color'];
	$str1=$one['size'];
	//将数据库中的字符串进行分割，得到数组
	$res = explode(",", $str);
	$res1=explode(",", $str1);
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>详情页</title>
		<link rel="stylesheet" type="text/css" href="css/xiangqingye.css"/>
		<link rel="stylesheet" type="text/css" href="css/swiper-3.4.0.min.css"/>
	</head>
	<body>
		<?php include"head.php" ?>
		<div class="xqyhead">
			<div><a href=""><img src="http://xqproduct.xiangqu.com/Foank3im0wOqvTo1blJIa9H2K0wX?imageView2/2/w/60/q/90/format/jpg/100x100/"/></a></div>
			<div>
				<a href=""><h3><?php echo $one['who'];  ?></h3></a>
				<a href=""><p>木与石/MOREUSE，是一群年轻设计师组成的设计机构。在普通的日常生活产品中，木与石设计师们融入自己的美学理念，使产品多一点点美好，使生活多一点点美妙。</p></a>
			</div>
		</div>
		<div class="xqybody">
			<div class="leftbody">
				<img src="<?php echo $one['imgurl']; ?>"/>
			</div>
			<div class="rightbody">
				<p><?php echo $one['name']; ?></p>
				<p>设计师<span><?php echo $one['sjh']; ?></span></p>
				<p>品牌<span><?php echo $one['pp']; ?></span></p>
				<div class="tuan">
					<p>颜色</p>
					<?php foreach($res as $k =>$v){ ?>
						<span onselectstart="return false"><?php echo $v; ?><i></i></span>
					
					<?php	} ?>
				</div>
				<div class="xinghao">
					<p>尺寸</p>
					<?php foreach($res1 as $k =>$v){ ?>
						<span onselectstart="return false"><?php echo $v ?><i></i></span>
					<?php	} ?>
					
				</div>
				<div class="shuliang">
					<p>数量</p>
					<div class="nums">
						<button class="btns1">➖</button>
						<input type="text" class="inputs1" value="1" oninput="inputsa()"/>
						<button class="btns2">➕</button>
					</div>
					<span class="kucun">库存<span><?php echo $one['num'] ?></span>件</span>
					<div class="jiage">
						<p>￥<?php echo $one['price']; ?></p>
						<span >邮费：8.0元</span><span class="lianxi">联系卖家</span>
					</div>
					<div id="zhifu">
						<button>立即购买</button>
						<button>加入购物车</button>
					</div>
					<div class="fahuo">
						<span>48小时发货</span><span>担保交易</span>
					</div>
					<div class="erwei">
						<img src="http://xqres.xiangqu.com/xueqi798.jpg"/>
						<p>加想去君微信：xueqi798，成为本君好友，超多朋友福利，带你认识更多设计师哦～</p>
					</div>
				</div>
			</div>
		</div>
		<div class="tltj">
			<h4>同类推荐</h4>
			<span></span>
			<div class="swiper-container" >
				 <div class="swiper-wrapper">
					 <div class="swiper-slide">
					 	<a href=""><img src="http://xqproduct.xiangqu.com/FkaYZbovYWIVw3S-0RtPPzzlwBk2?imageView2/2/w/150/q/90/format/jpg/800x800/"/></a>
					 	<a href=""><img src="http://xqproduct.xiangqu.com/Fo820bS2n_zxh0oZEfacCnCoj4U0?imageView2/2/w/150/q/90/format/jpg/750x750/"/></a>
					 	<a href=""><img src="http://xqproduct.xiangqu.com/FtScDWh6qfW7d4weYAs-55WJN5KG?imageView2/2/w/150/q/90/format/jpg/748x764/"/></a>
					 	<a href=""><img src="http://xqproduct.xiangqu.com/FgQ0Dce8gDJwz57wmZorRpt1EnPJ?imageView2/2/w/150/q/90/format/jpg/750x750/"/></a>
					 	<a href=""><img src="http://xqproduct.xiangqu.com/Fm95NOlFW20AbURLdMQf_Bzrxq0h?imageView2/2/w/150/q/90/format/jpg/750x750/"/></a>
					 	<a href=""><img src="http://xqproduct.xiangqu.com/FrbV1WrUDQRPAEFAs6OdT1tAH2_R?imageView2/2/w/150/q/90/format/jpg/600x600/"/></a>
					 </div>
					 <div class="swiper-slide">
					 	<a href=""><img src="http://xqproduct.xiangqu.com/FlUw7ST1imgbhVx-W8-mFip-nsl0?imageView2/2/w/150/q/90/format/jpg/750x750/"/></a>
					 	<a href=""><img src="http://xqproduct.xiangqu.com/Fr08sczAoY281jD3FPQf_qhnf0A4?imageView2/2/w/150/q/90/format/jpg/600x600/"/></a>
					 	<a href=""><img src="http://xqproduct.xiangqu.com/Fm95NOlFW20AbURLdMQf_Bzrxq0h?imageView2/2/w/150/q/90/format/jpg/750x750/"/></a>
					 	<a href=""><img src="http://xqproduct.xiangqu.com/FiE28xWncBnkWaO0a7IOvIZzNQcs?imageView2/2/w/150/q/90/format/jpg/600x600/"/></a>
					 	<a href=""><img src="http://xqproduct.xiangqu.com/FuyeJAJ6x8qArDfbbxjxwYRacOUN?imageView2/2/w/150/q/90/format/jpg/800x800/"/></a>
					 	<a href=""><img src="http://xqproduct.xiangqu.com/FuBXh1pA7lsVlD-M345R5D_59Fl-?imageView2/2/w/150/q/90/format/jpg/800x800/"/></a>
					 </div>
					
				  </div>
				    <!-- 如果需要导航按钮 -->
				  <div class="swiper-button-prev"></div>
				  <div class="swiper-button-next"></div>    
			</div>		
		</div>
		<div class="spmx">
			<ul class="pinglun">
				<li >商品描述<i></i></li>
				<li >评论(<span>0</span>)<i></i></li>
			</ul>
			<div class="spmxwrap">
				<div class="spmxbody">
					<div class="spmxhead">
						<a href=""><span>木与石MOREUSEE</span></a>
						<a href=""><span>原创插画</span></a>
						<a href=""><span>手机</span></a>
						<a href=""><span>苹果</span></a>
						<a href=""><span>设计</span></a>
						<a href=""><span>题</span></a>
					</div>
					<div class="spmxfooter">
						<img src="http://xqproduct.xiangqu.com/FsUQxF9vwWaOljfr0eZRLlGst9vC?imageView2/2/w/750/q/90/format/jpg/750x945/"/>
						<img src="http://xqproduct.xiangqu.com/FoOakQjOi9rWt2R_JfGC-oiFO7Rk?imageView2/2/w/1500/q/90/format/jpg/1500x1000/"/>
						<img src="http://xqproduct.xiangqu.com/FmVz31WsmLujIrhNQj9wSruT_HcY?imageView2/2/w/750/q/90/format/jpg/750x11767/"/>
						<img src="http://xqproduct.xiangqu.com/FpTZXUlfjE6tcxPUculhmt_8kj0T?imageView2/2/w/750/q/90/format/jpg/750x280/"/>
						<img src="http://xqproduct.xiangqu.com/FlAOBoy31uhDK0mA2gnxVXsR1PSW?imageView2/2/w/750/q/90/format/jpg/750x507/"/>
						<img src="http://xqproduct.xiangqu.com/Ft6XOo16yOm0cx-ma2nDTVAPwDlx?imageView2/2/w/750/q/90/format/jpg/750x482/"/>
						<img src="http://xqproduct.xiangqu.com/Flz1ouUq6a6ftEp_1B3_4vLhYhWC?imageView2/2/w/750/q/90/format/jpg/750x483/"/>
						<img src="http://xqproduct.xiangqu.com/FmJlBogFat0HZQc9ZAKrOb5m3KxM?imageView2/2/w/750/q/90/format/jpg/750x937/"/>
					</div>
				</div>
			</div>
			<div class="xxpl">
				<div>
					<textarea  class="xxpls"></textarea>
					<input type="button" value="发表评论" class="fbpl"/>
				</div>
			</div>
			<div class="contexts">
				<ul id="comment_ul">
					
				</ul>	
			</div>
		</div>
		<?php include "footer.php" ?>
	</body>
	<script src="js/swiper-3.4.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
				//input框中输入的处理
		function inputsa() {
			    var x = $('.inputs1').val();
			 	var rea=/^[0-9]*$/g;
			  	var reb=rea.test(x);
			  	if(reb){
			  		if(x><?php echo $one['num']; ?>){
			  			alert('超过最大数量');
			  			$('.inputs1').val(<?php echo $one['num']; ?>);
			  		}else{
			  			return false;
			  		}			  		
			  	}else{
			  		if($('.inputs1').val()==1){
			  			return;
			  		}else{
			  			$('.inputs1').val(1);
			  		}
			  		
			  	}
			}
		//点击加入到购物车时的操作
		$('#zhifu button').eq(1).click(function(){
				if(aa==null||bb==null){
					alert("请选择规格");
				}else{
					var color =aa[0].innerText;
					var size = bb[0].innerText;
					var nums = $('.inputs1').val();
					var imgurl = '<?php echo $one['imgurl']; ?>';
					var who = '<?php echo $one['who']; ?>';
					var name = '<?php echo $one['name']; ?>';
					var price = <?php echo $one['price']; ?>;
					var num = <?php echo $one['num']; ?>;
					//console.log(color,size,num,imgurl,who,name,price);
					$.ajax({
						type:"post",
						url:"adds.php",
						dataType:"json",
						async:true,
						data:{
							color:color,
							size:size,
							nums:nums,
							imgurl:imgurl,
							who:who,
							num:num,
							name:name,
							price:price
						},
						success:function(data){
							if(data.status==1){
								alert('已加入到购物车');
							}else{
								alert('加入购物车失败');
							}
						}
					});
				}	
				
		});
		//按钮+
		$(".btns2").click(function(){
			var b =$('.inputs1').val();
			b++;
			if(b><?php echo $one['num']; ?>){
				b=<?php echo $one['num']; ?>;
			}
			$('.inputs1').val(b);
		}); 
	</script>
	<script src="js/xiangqingye.js" type="text/javascript" charset="utf-8"></script>
</html>
