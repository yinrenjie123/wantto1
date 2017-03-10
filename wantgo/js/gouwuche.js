		//购物车页
		//数量减
		$(".btns1").click(function() {
		    var t = $(this).parent().find('.inputs1');
		    t.val(parseInt(t.val()) - 1);
		    if (t.val() <= 1) {
		      t.val(1);
		    }
		    TotalPrice();
		    
	 });
	  
		//
		$(".xq").click(function() {
		    var goods = $(this).closest(".tables").find(".xq"); //获取本店铺的所有商品
		    var goodsC = $(this).closest(".tables").find(".xq:checked"); //获取本店铺所有被选中的商品
		    var Shops = $(this).closest(".tables").find(".xx"); //获取本店铺的全选按钮
		    if (goods.length == goodsC.length) { //如果选中的商品等于所有商品
		      Shops.prop('checked', true); //店铺全选按钮被选中
		      if ($(".xx").length == $(".xx:checked").length) { //如果店铺被选中的数量等于所有店铺的数量
		        $(".pp").prop('checked', true); //全选按钮被选中
		        TotalPrice();
		      } else {
		        $(".pp").prop('checked', false); //else全选按钮不被选中 
		        TotalPrice();
		      }
		    } else { //如果选中的商品不等于所有商品
		      Shops.prop('checked', false); //店铺全选按钮不被选中
		      $(".pp").prop('checked', false); //全选按钮也不被选中
		      // 计算
		      TotalPrice();
		      // 计算
		    }
  		});
		// 点击店铺按钮
		  $(".xx").change(function() {
		    if ($(this).prop("checked") == true) { //如果店铺按钮被选中
		      $(this).parents(".tables").find(".xq").prop('checked', true); //店铺内的所有商品按钮也被选中
		      if ($(".xx").length == $(".xx:checked").length) { //如果店铺被选中的数量等于所有店铺的数量
		        $(".pp").prop('checked', true); //全选按钮被选中
		        TotalPrice();
		      } else {
		        $(".pp").prop('checked', false); //else全选按钮不被选中
		        TotalPrice();
		      }
		    } else { //如果店铺按钮不被选中
		      $(this).parents(".tables").find(".xq").prop('checked', false); //店铺内的所有商品也不被全选
		      $(".pp").prop('checked', false); //全选按钮也不被选中
		      TotalPrice();
		    }
		    
		  });
	  // 点击全选按钮
	  $(".pp").click(function() {
	    if ($(this).prop("checked") == true) { //如果全选按钮被选中
	      $(".xx").prop('checked', true); //所有按钮都被选中
	      
	      TotalPrice();
	    } else {
	      $(".xx").prop('checked', false); //else所有按钮不全选
	      TotalPrice();
	    }
	    $(".xx").change(); //执行店铺全选的操作
	  });
	  function TotalPrice() {
	    var allprice = 0; //总价
	    var ff=0;
	    var oprice = 0; //店铺总价
	    var numa=0; //店铺总数
	    $(".tables").each(function() { //循环每个店铺
	     
	      $(this).find(".xq").each(function() { //循环店铺里面的商品
	        if ($(this).is(":checked")) { //如果该商品被选中
	          var  num = parseInt($(this).parents(".tables").find(".inputs1").val()); //得到商品的数量
	          var price = parseFloat($(this).parents(".tables").find(".td5").text()); //得到商品的单价
	          var total = price * num; //计算单个商品的总价
	          oprice += total; //计算该店铺的总价
	          numa+=num;  //计算该店铺的数量
	          
	        }
	//      $(this).closest(".tables").find(".td5").text(oprice.toFixed(2)); //显示被选中商品的店铺总价
	      });
	      
	      var oneprice = oprice; //得到每个店铺的总价
	      allprice += oneprice; //计算所有店铺的总价
	      var numss =numa; //得到每个店铺的数量
	      ff+=numss;   //得到所有店铺的数量
	    });
	    $(".hjs").text(allprice.toFixed(2)); //输出全部总价
   		$(".ll").text(ff);	
	  }
	  //点击删除按钮时，通过ajax将数据发送到后台，然后后台在进行操作删除数据库中对应的内容
	 function remove(id){
	  		$.ajax({
	  			type:"post",
	  			url:"delect.php",
	  			async:true,
	  			dataType:"json",
	  			data:{
	  				id:id
	  			},
	  			success:function(data){
	  				if(data.status==1){
	  				 window.location.href='gouwuche.php';
	  				}
	  			}
	  		});
	  }