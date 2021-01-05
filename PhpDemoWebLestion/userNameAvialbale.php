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

			<form id="add_tweet" method="post">
					
					<lable>User Name</lable>
					<input type="text" name="username" id="username" class="form-control"> 
					<br/>
					<spna id="availability"></spna>
				
				
			</form>
			<br>
			</div>
			<div id="load_tweet">

			</div>
</body>
</html>

<script>
$(document).ready(function(){
	$("#username").blur(function(){
		var username = $(this).val();
		$.ajax({
				url:"check.php",
				method:"POST",
				data:{username:username},
				dataType:"text",
				success:function(html){
					$("#availability").html(html);
				}
		});

	});
});
</script>