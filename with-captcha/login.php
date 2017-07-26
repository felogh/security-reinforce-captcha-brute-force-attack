<?php include_once('header.php') ?>

<section class="container">
	<script type="text/javascript" src='./static/login.js'></script>
	<div  class="formStyle" >
		<div class="row errorBox">
			<p class="text-danger error col-sm-offset-2"></p>
		</div>
		<div class="form-group row">
			<label class="col-xs-2">用户名</label>
			<div class="col-xs-8">
				<input type="text" id='username' class="form-control" name="username" placeholder="用户名">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-2">密码</label>
			<div class="col-xs-8">
				<input type="password" id='password' class="form-control" name="password" placeholder="密码">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-2">验证码</label>
			<div class="col-xs-8">
				<input type="text" id='captcha' class="form-control" name="captcha" placeholder="验证码">
			</div>
		</div>
		<img src="captcha.php?act=yes" id='captcha_pic' align="center" style="margin-top:5px; margin-left:200px">
		<input type="button" value="看不清楚验证码" onclick="window.location.reload();">
		<div class="form-group row">
			<div class="col-sm-offset-8">
				<button id="login" class="btn-info btn">登录</button>
			</div>
		</div>	
	</div>
</section>



<?php include_once('footer.php') ?>
