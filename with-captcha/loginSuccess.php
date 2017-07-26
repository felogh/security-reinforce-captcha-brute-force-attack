<?php include_once('header.php') ?>

<?php 
// session_start();

if(isset($_SESSION['username'])){


 ?>

<div class="container">
	<div class="row">
		<p class="text-success center" style="font-size:3em">Login success!</p>
	</div>
	<div class="row" style="margin-top: 20px;">
		<p class="text-success center name">Your name: <?php echo $_SESSION['username'];?></p>
	</div>
	<div class="row">
		<p class="text-info center"> 3s 后页面将自动跳转到<a href="index.php"> 首页</a></p>
	</div>
</div>

<?php

	header("Refresh:3,url=index.php");
}else{
	
	header("Location:login.php");
	session_unset();
	session_destroy();
}

 ?>



<?php include_once('footer.php') ?>