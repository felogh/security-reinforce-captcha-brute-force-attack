<?php
	// ���ݿ������ļ�
	header("Content-Type:text/html; charset=gb2312"); 
	$host='localhost';		//���ݿ������
	$user='root';			//���ݿ��û���
	$password='';	//���ݿ�����
	$database='login';		//���ݿ���
	$conn = mysqli_connect($host ,$user, $password, $database) or die('database connect error!');
?>
