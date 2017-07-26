
<?php 
include_once('header.php');

if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	echo "<p class='text-info center' style='font-size:3em;'>GoodBye,".$username."<br></p>";

	echo "<p class='text-info center'>3s 后将自动跳转到<a href='login.php'>登录页</a></p>";
	header("Refresh:3,url=login.php");
}else{
	header("location:login.php");
}

session_unset();
session_destroy();





include_once('footer.php');
 ?>