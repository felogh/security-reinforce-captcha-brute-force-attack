

<?php 
	include_once('conn.php');
	session_start();
	header("Content-type:text/html;charset=utf-8");
	$oldpwd = $_POST["oldpassword"];
	$newpwd = $_POST["newpassword"];
	$oldpwd = md5($oldpwd);
	$newpwd = md5($newpwd);
	$username = $_SESSION['username'];
	
	if($oldpwd != null && $newpwd != null){
		$sql = "select userpass from user where username='$username'";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);

		if ($row['userpass'] == $oldpwd){
 			$sql = "update user set userpass='$newpwd' where username='$username'";
 			mysqli_query($conn, $sql);
 			
 			$data['success'] = 1;
			$data['msg'] = '验证成功';
			echo json_encode($data);
			exit();
 		} else {
 			// password is wrong!
			$data['success'] = 0;
			$data['msg'] = '密码错误';
			echo json_encode($data);
			exit();
 		}
 		$data['success'] = 0;
		$data['msg'] = '用户名和密码不能为空';
		echo json_encode($data);
		exit();
	}

 ?>
