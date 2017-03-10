<?php
//登录模块验证
include "common.php";
$inputPhone = $_POST['inputPhone'];
$inputPwd = $_POST['inputPwd'];
$sql3 = "SELECT * FROM user WHERE inputPhone='$inputPhone' AND inputPwd='$inputPwd'";
$res3 = getone($sql3,"xiangqu");
if($res3){
	//用户名与密码正确
	session_start();
	$_SESSION['inputPhone'] = $res3['inputPhone'];
	$_SESSION['inputPwd'] = $res3['inputPwd'];
	//存cookie
	setcookie('inputPhone',$res3['inputPhone'],time()+7*3600*24);
	setcookie('inputPwd',$res3['inputPwd'],time()+7*3600*24);
	$data['info'] = "登录成功";
	$data['status'] = 1;
}else{
	$data['info'] = "登录失败";
	$data['status'] = 2;
}
echo json_encode($data);
?>

