<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>后台管理</title>
	<link rel="stylesheet" type="text/css" href="./static/zui/css/zui.min.css">
	<link rel="stylesheet" type="text/css" href="./static/style.css">
	<script type="text/javascript" src='./static/jquery.js'></script>
	<script type="text/javascript" src="./static/zui/js/zui.min.js"></script>
	
</head>
<body>
<?php session_start(); ?>

	<nav class="navbar navbar-inverse" >
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand">后台管理 | 登录</a>
			</div>
			<?php if(isset($_SESSION['username'])){ ?>
			<div class="personal pull-right">
				<ul class="clearfix">
					<li><span class="text">Welcome, <?php echo $_SESSION['username']; ?></span></li>
					<li class="exit"><a class="btn btn-info" href="logout.php">Exit</a></li>
				</ul>
			</div>
			<?php } ?>
		</div>
	</nav>

	<section class="contentBox">
		
	
