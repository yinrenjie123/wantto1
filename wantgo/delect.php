<?php
	//购物车页的删除，点击删除数据库中的信息
	include "common.php";
	$id = $_POST['id'];
	$sql = "DELETE FROM gouwuche WHERE id=$id";
	$res = delete($sql, 'xiangqu');
	if($res){
		$data['info']="删除成功";
		$data['status']=1;
		
	}else{
		$data['info']="删除失败";
		$data['status']=2;
	}
	echo json_encode($data);
?>