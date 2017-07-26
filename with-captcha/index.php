<?php include_once("header.php"); ?>


<?php 
// include_once('config.php');
// session_start();

if(!isset($_SESSION['username'])){
	header("location: login.php");
	exit();
}
else{

?>

<div class="container">
	<div class="row">
		<h2 class="text-success center">Hi, <?php echo $_SESSION['username']; ?></h2>
	</div>
	<div class="row" style="margin-top: 3em;">
		<div style="width:300px;margin:0 auto;">
			<ul class="funcBox">
				<li class="h1-info"><a href="./index.php">彩信平台业务限制</a></li>
				<li class="h1-danger"><a href="changePWD.php">修改密码</a></li>
			</ul>
		</div>
		
	</div>
</div>
	

<?php 
}
?>



<?php include_once("footer.php") ?>
