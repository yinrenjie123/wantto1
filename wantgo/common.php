<?php
	//增删改查的公共函数
	//增加
	function add($sql,$database){
		//连接数据库
		$link=mysqli_connect("localhost", "root", "", $database);
		//设置编码格式
		mysqli_query($link, "set names utf8");
		//执行sql语句
		$res=mysqli_query($link, $sql);
		return $res;
	}
	
	//删除
	function delete($sql,$database){
		$link=mysqli_connect("localhost", "root", "", $database);
		$res=mysqli_query($link, $sql);
		return $res;
	}
	//调用删除
//	$sql = "DELETE FROM phone WHERE id=16";
//	$res=delete($sql, "product");
//	if($res){
//		echo "删除成功";
//	}else{
//		echo "删除失败";
//	}

	//改
	function update($sql,$database){
		$link=mysqli_connect("localhost", "root", "", $database);
		mysqli_query($link, "set names utf8");
		$res=mysqli_query($link, $sql);
		return $res;
	}
//	$sql = "UPDATE phone SET name='三星' WHERE id=14";
//	$res=update($sql, "product");
	
	//查 获取一条数据
	function getone($sql,$database){
		//连接数据库
		$link=mysqli_connect("localhost", "root", "", $database);
		mysqli_query($link, "set names utf8");
		//执行sql语句，获取结果集
		$res=mysqli_query($link, $sql);
		//通过结果集拿到结果
		$list=mysqli_fetch_assoc($res);
		//查看影响的行数
//		$ress=mysqli_num_rows($res);
//		var_dump($ress);
		//释放结果集
		mysqli_free_result($res);
		
		if($list){
			return $list;
		}else{
			return false;
		}
	}
//	$sql = "SELECT * FROM phone ";
//	$list=getone($sql, "product");
//	print_r($list);

	//获取多条数据
	function getlist($sql,$database){
		//连接数据库
		$link=mysqli_connect("localhost", "root", "", $database);
		mysqli_query($link, "set names utf8");
		//执行sql语句
		$res=mysqli_query($link, $sql);
		//拿到结果集
		while($list=mysqli_fetch_assoc($res)){
			$arr[]=$list;
		}
		if(!empty($arr)){
			return $arr;
		}else{
			return false;
		}
	}
//	$sql = "SELECT * FROM phone ";
//	$list=getlist($sql, "product");
//	echo "<pre>";
//	print_r($list);
//	echo "<pre>";
?>