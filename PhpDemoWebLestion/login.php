<!DOCTYPE html>
<html>
<head>
	<title>Webslesson Tutorial</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
			<div class="container" style="width:500px; border:1px solid #ccc;">

			<br/> 

			<h2 align="center">Login</h2>

			<form id="login_form">
					
					<lable>User Name</lable>
					<input type="text" name="username" id="username" class="form-control"> 
					<br/>
					<lable>User Passowrd</lable>
					<input type="password" name="userpassword" id="userpassword" class="form-control"> 
					<br/>

					<button type="button" id="show_password" name="show_password" class="btn btn-default">Show Password</button>
					<br>
			</form>
			<br>
			</div>
</body>
</html>

<script>

$(document).ready(function(){
	$('#show_password').on('click',function(){
		var password =$('#userpassword');
		var passwordFieldType = password.attr('type');
		if(password.val()!=''){
				if(passwordFieldType =='password'){
					password.attr('type','text');
			 		$(this).text('hide password')
				}else{
					password.attr('type','password');
					$(this).text('showPAssword');
				}
		}
		else{
				alert("Plase Enter Password");
		}
	});
});

</script>