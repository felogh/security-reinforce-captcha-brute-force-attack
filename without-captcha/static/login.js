$(function(){

	$('#login').click(function(){
		var name = $('#username').val();
		var passwd = $('#password').val();
		$.ajax({
			type:"POST",
			url:"checkLogin.php",
			data:{"username":name,"password":passwd},
			dataType:"json",
			success:function(data,textStatus){
				if(data.success == 0){
					$('.errorBox').show();
					$('.error').text(data.msg);
				}else{
					window.location = 'loginSuccess.php';
				}
				
			},
			error:function(XMLHttpRequest,textStatus,errorThrown){
				$('.errorBox').show();
				$('.error').text('AJAX error '+textStatus);
			}
		});

	});


})