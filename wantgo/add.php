<?php
//注册核对
include "common.php";
$inputPhone = $_POST['inputPhone'];
$inputPwd = $_POST['inputPwd'];
$sql = "SELECT * FROM user WHERE inputPhone='$inputPhone'";
$res = getone($sql,"xiangqu");
if($res){
	//存在此号码，就不让注册
	$data['info'] = "注册失败";
	$data['status'] = 3;
}else{
	//不存在此号码
	$sql2 = "INSERT INTO user(inputPhone,inputPwd) VALUES('$inputPhone','$inputPwd')";
	$res2 = add($sql2,"xiangqu");
	if($res2){
		$data['info'] = "注册成功";
		$data['status'] = 1;
	}else{
		$data['info'] = "注册失败";
		$data['status'] = 2;
	}
	
}
echo json_encode($data);
?>