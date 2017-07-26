$(function(){

	$('#changePWD').click(function(){
		var oldpwd = $('#oldpassword').val();
		var newpwd = $('#newpassword').val();
		$.ajax({
			type:"POST",
			url:"exeChange.php",
			data:{"oldpassword":oldpwd,"newpassword":newpwd},
			dataType:"json",
			complete:function(data,textStatus){
				if(data.success == 0){
					$('.errorBox').show();
					$('.error').text(data.msg);
				}else{
					window.location.href = "index.php";
				}
				
			},
			error:function(XMLHttpRequest,textStatus,errorThrown){
			/*
				$('.errorBox').show();
				$('.error').text('AJAX error '+textStatus);
				*/
			}
		});

	});


})
