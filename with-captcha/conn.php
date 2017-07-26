<?php
	// 数据库链接文件
	header("Content-Type:text/html; charset=gb2312"); 
	$host='localhost';		//数据库服务器
	$user='root';			//数据库用户名
	$password='';	//数据库密码
	$database='login';		//数据库名
	$conn = mysqli_connect($host ,$user, $password, $database) or die('database connect error!');
?>
