

<?php 
	include_once('conn.php');
	header("Content-type:text/html;charset=utf-8");
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password = md5($password);

	if($username != null && $password != null){
		$sql = "select * from user";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		
		if ($row['username'] == $username && $row['userpass'] == $password){
			// Login success
			session_start();
 			$_SESSION['username'] = $username;
 			$_SESSION['password'] = $password;
 			
 			$data['success'] = 1;
			$data['msg'] = '登录成功';
			echo json_encode($data);
			exit();
 		} else {
 			// password is wrong!
			$data['success'] = 0;
			$data['msg'] = '用户名或密码错误';
			echo json_encode($data);
			exit();
 		}
		$data['success'] = 0;
		$data['msg'] = '用户名和密码不能为空';
		echo json_encode($data);
		exit();
	}

 ?>
