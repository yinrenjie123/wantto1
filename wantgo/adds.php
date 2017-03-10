<?php
	//添加到购物车模块
	include "common.php";
	$color = $_POST['color'];
	$size = $_POST['size'];
	$nums = $_POST['nums'];
	$num = $_POST['num'];
	$imgurl = $_POST['imgurl'];
	$who = $_POST['who'];
	$name = $_POST['name'];
	$price = $_POST['price'];
//	print_r($_POST);
	$sql = "INSERT INTO gouwuche (size,color,imgurl,name,nums,who,price,num) VALUES ('$size','$color','$imgurl','$name',$nums,'$who',$price,$num)";
	$res=add($sql, 'xiangqu');
	if($res){
		$data['info']='添加成功';
		$data['status']='1';
	}else{
		$data['info']='添加失败';
		$data['status']='2';
	}
	echo json_encode($data);
?>