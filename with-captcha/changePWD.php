<?php include_once('header.php') ?>

<section class="container">
	<script type="text/javascript" src='./static/changePWD.js'></script>
	<div  class="formStyle" >
		<div class="row errorBox">
			<p class="text-danger error col-sm-offset-2"></p>
		</div>
		<form action="./exeChange.php" method="post">
		<div class="form-group row">
			<label class="col-xs-2">当前密码</label>
			<div class="col-xs-8">
				<input type="password" id='oldpassword' class="form-control" name="oldpassword" placeholder="当前密码">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-2">新密码</label>
			<div class="col-xs-8">
				<input type="password" id='newpassword' class="form-control" name="newpassword" placeholder="新密码">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-offset-8">
				<button id="changePWD" class="btn-info btn">确认</button>
			</div>
		</div>	
	</div>
</section>



<?php include_once('footer.php') ?>
